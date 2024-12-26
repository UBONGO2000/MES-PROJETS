package Interface;

import modele.User;
import modele.Database;

import java.sql.SQLException;
import java.util.Scanner;

public class AddNewAdmin implements Operation {
    @Override
    public void operation(Database database, Scanner sc, User user) {
        System.out.println("Enter First Name: ");
        String firstName = sc.nextLine();
        System.out.println("Enter Last Name: ");
        String lastName = sc.nextLine();
        System.out.println("Enter phone number: ");
        String phoneNumber=sc.nextLine();
        System.out.println("Enter Email: ");
        String email = sc.nextLine();
        System.out.println("Enter Password: ");
        String password = sc.nextLine();
        System.out.println("Enter Password Confirmation: ");
        String passwordConfirmation = sc.nextLine();
        while(!password.equals(passwordConfirmation)) {
            System.out.println("Passwords do not match");
            System.out.println("Enter Password: ");
            password = sc.nextLine();
            System.out.println("Enter Password Confirmation: ");
            passwordConfirmation = sc.nextLine();
        }
        int accType = 1;

        try{

            String insert="INSERT INTO [dbo].[user]\n" +
                    "           ([FirstName]\n" +
                    "           ,[LastName]\n" +
                    "           ,[Email]\n" +
                    "           ,[PhoneNumber]\n" +
                    "           ,[Password]\n" +
                    "           ,[Type])\n" +
                    "     VALUES\n" +
                    "           (<"+firstName+", text,>\n" +
                    "           ,<"+lastName+", text,>\n" +
                    "           ,<"+email+", text,>\n" +
                    "           ,<"+phoneNumber+", text,>\n" +
                    "           ,<"+password+", text,>\n" +
                    "           ,<"+accType+", int,>)";

            System.out.println(insert);
            database.getStatement().execute(insert);
            System.out.println("New Admin added successfully");
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
