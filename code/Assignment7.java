import javafx.application.Application;
import javafx.stage.*;
import javafx.fxml.*;
import javafx.scene.*;
import javafx.event.*;
import javafx.scene.control.*;
import javafx.scene.input.*;

public class Assignment7 extends Application {

    @FXML RadioButton greaterButton;
    @FXML RadioButton lesserButton;
    @FXML Slider limitSlider;
    @FXML TextField X1;
    @FXML TextField Y1;
    @FXML TextField X2;
    @FXML TextField Y2;
    @FXML Button calcButton;
    @FXML Label slideCounter;
    @FXML TextArea myText;
      
    @FXML protected void mouseDraggedMethod(MouseEvent event){
      double currentValue = limitSlider.getValue(); 
      int intValue = (int) currentValue; 
      slideCounter.setText(intValue + ""); 
    }
    
    @FXML protected void calculate(ActionEvent event) {
      try {
         checkNums();
         int x1, x2, y1, y2;
         x1 = Integer.parseInt(X1.getText());
         x2 = Integer.parseInt(X2.getText());
         y1 = Integer.parseInt(Y1.getText());
         y2 = Integer.parseInt(Y2.getText());
         double dist = Math.sqrt(Math.pow((y2 - y1),2.0) + Math.pow((x2 - x1), 2.0));
         myText.setText("Brandon Nelson\nThe distance between (" + x1 + "," + y1 + ") and (" + x2 + "," + y2 + ") is " + dist); 
         
      } catch (NumberFormatException e){
         myText.setText("Invalid type: Coordinate values must be whole numbers");
      }
      catch (Exception excpt) {
         myText.setText(excpt.getMessage());
      } 
 
    }
    
    @FXML protected void checkNums() throws Exception {
      boolean pointsLess = greaterButton.isSelected();
      boolean pointsMore = lesserButton.isSelected();
      double actualVal = limitSlider.getValue();
      int slideVal = (int) actualVal;
      int x1, x2, y1, y2; 
      x1 = Integer.parseInt(X1.getText());
      x2 = Integer.parseInt(X2.getText());
      y1 = Integer.parseInt(Y1.getText());
      y2 = Integer.parseInt(Y2.getText());
      if (pointsLess) {
         if (x1 > slideVal || y1 > slideVal || x2 > slideVal || y2 > slideVal) {
            throw new Exception("Inputs can not be more than " + slideVal);
         }
      } 
      if (pointsMore) {
         if (x1 < slideVal || y1 < slideVal || x2 < slideVal || y2 < slideVal) {
            throw new Exception("Inputs can not be less than " + slideVal);
         }
      } 
    }
    
    public void start(Stage primaryStage) throws Exception {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Assignment7.fxml"));
        loader.setController(this);
        Parent root = loader.load();

        Scene myScene = new Scene(root,600,400); 
        primaryStage.setScene(myScene);
        primaryStage.show();
    }
    
    public static void main(String[] args) {
        launch(args);
    }
}