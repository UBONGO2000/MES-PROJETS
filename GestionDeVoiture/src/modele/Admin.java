package modele;

import Interface.AddNewAdmin;
import Interface.Operation;

import java.util.Scanner;

public class Admin extends User{
    private Operation[] operations = new Operation[] {new AddNewAdmin()};
    public Admin() {
        super();
    }

    public void showListe(Database database, Scanner sc) {
        System.out.println("\n1. Add New Admin");
        System.out.println("2. View Cars Rent Car");
        System.out.println("3. Update Car");
        System.out.println("4. Delete Car");
        System.out.println("5. Add New Admin");
        System.out.println("6. Show Rents");
        System.out.println("7. Quit");

        int i = sc.nextInt();
        operations[i].operation(database,sc,this);
    }
}
