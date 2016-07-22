import math

def main():
    height = eval(input("Input height: "))
    angle_degree = eval(input("Angle of ladder in degrees: "))

    angle_radian = math.pi / 180 * angle_degree

    length = height / math.sin(angle_radian)

    print("The length is: ", length)

main()

