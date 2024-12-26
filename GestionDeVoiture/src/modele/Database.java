package modele;

import java.sql.*;

public class Database {

    private String user = "sa";
    private String password = "BaseDB123";
    private String url = "jdbc:sqlserver://localhost:1433;databaseName=carrentalsystemBD";
    private Statement statement;

    public Database() {
        try{
            Connection con = DriverManager.getConnection(url, user, password);
            statement = con.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public Statement getStatement() {
        return statement;
    }
}
