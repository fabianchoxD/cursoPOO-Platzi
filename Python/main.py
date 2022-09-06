from car import Car
from account import Account


if __name__ == "__main__":
    print("Hola Mundo")
    '''car  = Car()
    car.license = "RTC46F"
    car.driver = "Fabian"
    car.passenger = 2
    print(vars(car))

    car2 = Car()
    car2.license = "CPW554"
    car2.driver = "Stevens"
    car2.passenger = 5
    print(vars(car2))'''

    car = Car("RTC46F", Account("Fabian Varon","1075269439"))
    print(vars(car))
    print(vars(car.driver))
