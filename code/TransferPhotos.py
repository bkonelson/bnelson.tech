#This script is designed for taking photos from disks locate in the physical LEP Data-packs
#and adding them to the scanned copies to create a single PDF file

print('Importing modules...')
import os, sys, shutil, docx, PyPDF2
from win32com import client

print('Enter the last four digits of the PSRE serial number: A4V____')
PSRE = 'A4V' + raw_input()

type = '.jpg' 
doc = docx.Document()
workingdoc = 'workingdoc.docx'
photos = []
captions = []
datafile = []
CDDir = 'D:\\'
photosaveDir = '\\\GLDFP07302\\Data\\Shares\\DFSR\\FISAC\\Public\\Propulsion\\Liquids\\PSRE Data Files\\PSRE LEP Photos'
combinesaveDir = '\\\GLDFP07302\\Data\\Shares\\DFSR\\FISAC\\Public\\Propulsion\\Liquids\\PSRE Data Files\\LEP Combined'
datafileDir = '\\\GLDFP07302\\Data\\Shares\\DFSR\\FISAC\\Public\\Propulsion\\Liquids\\PSRE Data Files\\PSRE LEP Data packs (scanned)'

#Check to see if CD is in drive
while os.path.exists(CDDir) == False:
	print('No CD detected: Press Enter to try again')
	raw_input()
	
#Find file(s) in LEP Datapack directory
print('Saving file names...')
for dirName, subdirlist, fileList in os.walk(datafileDir):
	for file in fileList:
		if file.startswith(PSRE):
			datafile.append(dirName + '\\' + file) 

#Save file names on CD to variables
for dirName, subdirlist, fileList in os.walk(CDDir):
	for file in fileList:
		mfile = file.lower()
		if mfile.endswith(type):
			photos.append(dirName + '\\' + file)
			captions.append(dirName.upper())
			
#Make docx file in photosaveDir
os.chdir(photosaveDir)
print('Adding photos to docx...')
for i in range(len(photos)):
	doc.add_picture(photos[i], width=docx.shared.Inches(6), height=docx.shared.Inches(4))
	doc.add_paragraph(os.path.basename(captions[i].rstrip(type)))

#Option for 2nd CD of photos
print('Add photos from another CD? (y/n)')
secCD = raw_input()
if secCD == 'y' or secCD == 'Y':
	photos = []
	captions = []
	print('Insert second CD and press Enter')
	raw_input()
	while os.path.exists(CDDir) == False:
		print('No CD detected: Press Enter to try again')
		raw_input()
	print('Saving file names...')
	for dirName, subdirlist, fileList in os.walk(CDDir):
		for file in fileList:
			mfile = file.lower()
			if mfile.endswith(type):
				photos.append(dirName + '\\' + file)
				captions.append(dirName.upper())
	print('Adding photos to docx...')
	for i in range(len(photos)):
		doc.add_picture(photos[i], width=docx.shared.Inches(6), height=docx.shared.Inches(4))
		doc.add_paragraph(os.path.basename(captions[i].rstrip(type)))
doc.save(workingdoc)

#Convert file to PDF and delete docx file
print('Converting to pdf...')
word = client.DispatchEx('Word.Application')
new_name = workingdoc.replace(workingdoc, PSRE + r".pdf")
in_file = photosaveDir + "\\" + workingdoc 
photofile = photosaveDir + "\\" + new_name 
doc = word.Documents.Open(in_file)
doc.SaveAs(photofile, FileFormat = 17)
doc.Close()
word.Quit()
os.unlink(photosaveDir + '\\' + workingdoc) 

#Combine PDF files into one file
for i in range(len(datafile)):
	print('Copying pages from original pdf...')
	if datafile[i]:
		pdf1Reader = PyPDF2.PdfFileReader(datafile[i])
		pdf2Reader = PyPDF2.PdfFileReader(photofile)
		pdfwriter = PyPDF2.PdfFileWriter()
		for pageNum in range(pdf1Reader.numPages):
			pageObj = pdf1Reader.getPage(pageNum)
			pdfwriter.addPage(pageObj)
		for pageNum in range(pdf2Reader.numPages):
			pageObj = pdf2Reader.getPage(pageNum)
			pdfwriter.addPage(pageObj)
		
		#transfer bookmarks
		print('Adding Bookmarks...')
		bmtitles = []
		bmpgnums = []
		newbookmarks = []
		bookmarks = pdf1Reader.getOutlines()
		for element in bookmarks:
			if isinstance(element, dict):
				newbookmarks.append(element)
				for key, value in element.items():
					if key == '/Title':
						bmtitles.append(value)
			elif isinstance(element, list):
				for secelem in element:
					if isinstance(secelem, dict):
						newbookmarks.append(secelem)
						for key, value in secelem.items():
							if key == '/Title':
								bmtitles.append(value)
					elif isinstance(secelem, list):
						for thrdelem in secelem:
							if isinstance(thrdelem, dict):
								newbookmarks.append(thrdelem)
								for key, value in thrdelem.items():
									if key == '/Title':
										bmtitles.append(value)
		
		def _setup_page_id_to_num(pdf, pages=None, _result=None, _num_pages=None):
			if _result is None:
				_result = {}
			if pages is None:
				_num_pages = []
				pages = pdf.trailer["/Root"].getObject()["/Pages"].getObject()
			t = pages["/Type"]
			if t == "/Pages":
				for page in pages["/Kids"]:
					_result[page.idnum] = len(_num_pages)
					_setup_page_id_to_num(pdf, page.getObject(), _result, _num_pages)
			elif t == "/Page":
				_num_pages.append(1)
			return _result

		# map page ids to page numbers
		pg_id_num_map = _setup_page_id_to_num(pdf1Reader)
		counter = len(bmtitles)
		for pgnum in range(len(bmtitles)):
			bmpgnums.append(pg_id_num_map[newbookmarks[pgnum].page.idnum])
		for bm in range(len(bmtitles)):
			pdfwriter.addBookmark(bmtitles[bm], bmpgnums[bm])
		
		#write pdf(s)
		print('Writing to file...')
		pdfwriter.addBookmark('PHOTOS', pdf1Reader.getNumPages())
		if os.path.exists(combinesaveDir + '\\' + PSRE + '.pdf'):
			pdfOutputFile = open(combinesaveDir + '\\' + PSRE + '(rework ' + str(i) + ')' + '.pdf', 'wb')
		else:
			pdfOutputFile = open(combinesaveDir + '\\' + PSRE + '.pdf', 'wb')
		pdfwriter.write(pdfOutputFile)
		pdfOutputFile.close()
print('Please verify successful creation of file(s)')