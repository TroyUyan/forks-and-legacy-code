
def main():
    input_string = input("Enter a THREE WORD phrase: ")

    x = int(input_string.find(" "))
    y = int(input_string.rfind(" "))

    print()

    letter1 = str(input_string[0:1])
    letter2 = str(input_string[x+1:x+2])
    letter3 = str(input_string[y+1:y+2])
   
    print(letter1.upper(),letter2.upper(),letter3.upper())

    print()   

main()


