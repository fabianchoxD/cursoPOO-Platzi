package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
        //Car car = new Car("RTC46F", new Account("Fabian Varon", "1075269439"));
        UberX uberX = new UberX("RTC46F", new Account("Fabian Varon", "ABC123"), "porshe", "2023");
        //car.license = "RTC46F";
        //car.driver = "Fabian Varon";
        uberX.setPassenger(3);
        //System.out.println("Car License: " + car.license);
        uberX.printDataCar();
/*
        Car car2 = new Car("CPW554", new Account("Stevens", "34DDbJ"));
        //car2.license = "CPW554";
        //car2.driver = "Stevens";
        car2.passenger = 5;
        //System.out.println("Car2 License: " + car2.license);
        car2.printDataCar();*/
    }
}