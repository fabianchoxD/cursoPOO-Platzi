package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
        Car car = new Car("RTC46F", new Account("Fabian Varon", "1075269439"));
        //car.license = "RTC46F";
        //car.driver = "Fabian Varon";
        car.passenger = 2;
        //System.out.println("Car License: " + car.license);
        car.printDataCar();

        Car car2 = new Car("CPW554", new Account("Stevens", "1075269439"));
        //car2.license = "CPW554";
        //car2.driver = "Stevens";
        car2.passenger = 5;
        //System.out.println("Car2 License: " + car2.license);
        car2.printDataCar();
    }
}