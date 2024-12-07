package modele;

import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class Rent {
    private int ID;
    private User user;
    private Car car;
    private LocalDateTime dateTime;
    private int hours;
    private double total;
    private String status;
    private DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-dd-MM");

    public Rent() {
        dateTime = LocalDateTime.now();
    }


    public int getID() {
        return ID;
    }

    public void setID(int ID) {
        this.ID = ID;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }

    public Car getCar() {
        return car;
    }

    public void setCar(Car car) {
        this.car = car;
    }

    public String getDateTime() {
        return formatter.format(dateTime);
    }

    public void setDateTime(String dateTimetring) {
        this.dateTime = LocalDateTime.parse(dateTimetring, formatter) ;
    }

    public int getHours() {
        return hours;
    }

    public void setHours(int hours) {
        this.hours = hours;
    }

    public double getTotal() {
        return total;
    }

    public void setTotal(double total) {
        this.total = total;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public DateTimeFormatter getFormatter() {
        return formatter;
    }

    public void setFormatter(DateTimeFormatter formatter) {
        this.formatter = formatter;
    }
}
