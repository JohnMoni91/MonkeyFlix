import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class NetflixClone extends Application {
    
    @Override
    public void start(Stage primaryStage) {
        VBox root = new VBox();
        Label title = new Label("Minhas Séries do YouTube");

        // Aqui você adicionará a lógica para exibir os vídeos, miniaturas e descrições

        root.getChildren().add(title);
        
        Scene scene = new Scene(root, 800, 600);
        
        primaryStage.setTitle("Netflix Clone");
        primaryStage.setScene(scene);
        primaryStage.show();
    }
    
    public static void main(String[] args) {
        launch(args);
    }
}
