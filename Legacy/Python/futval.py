# futval.py
#    A program to compute the value of an investment
#    carried 10 years into the future

def main():
    print("This program calculates the future value")
    print("of a yearly investment.")

    principal = eval(input("Enter the initial principal: "))
    rate = eval(input("What is the yearly rate?: "))
    periods = eval(input("How many times is the interest compounded?: "))
    years = eval(input("Enter the number of years: "))

    for i in range(years*periods):
        principal = principal + (principal * (rate/periods))


    print("The value in",years,"years is:", principal)

main()





