package Interface;

import modele.Database;
import modele.User;

import java.util.Scanner;


public interface Operation {
    public void operation(Database database, Scanner sc, User user);
}
