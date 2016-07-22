def main():

#average
    
    sum = 0

    grades = [44, 84, 77, 81, 83, 100, 22, 89, 30, 50]

    for i in range(len(grades)):
        sum = sum + grades[i]

    average = sum / len(grades)

    print("The average grade is ",average)
    print("")

# largest

    largest_element = grades[0]

    for i in range (1, len(grades)):
        if grades[i] > largest_element:
            largest_element = grades[i]

    print("The largest element is ",largest_element)
    print("")
    
# smallest

    smallest_element = grades[0]

    for i in range (1, len(grades)):
        if grades[i] < smallest_element:
            smallest_element = grades[i]

    print("The smallest element is ",smallest_element)
    print("")
    
# range

    largest_element = grades[0]
    smallest_element = grades[0]

    for i in range(1,len(grades)):
        if grades[i] < smallest_element:
            smallest_element = grades[i]
        elif grades[i] > largest_element:
            largest_element = grades[i]

    print("The largest element is ",largest_element)
    print("The smallest element is ",smallest_element)
    print("The range is ",largest_element - smallest_element)
    print("")    

        
main()
