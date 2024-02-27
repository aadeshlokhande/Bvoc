// Array Exercise 
// Code By Aadesh Lokhande

// 1) Write a program for creating a array of 10 elements
// CODE 
#include<stdio.h>
int main()
{
    int arr[10] = {2,12,22,32,42,52,62,72,82,92};
    printf("arr[10] = {");
    for(int i = 0;i<10; i++)
    {
        if(i!=9)
        {
            printf("%d, ",arr[i]);
        }
        else
        {
            printf("%d} ",arr[i]);
        }
    }
    return 0;
}

// OUTPUT 
// int arr[10] = {2,12,22,32,42,52,62,72,82,92}

// 2) Store odd numbers in array of size 10
// CODE 
#include<stdio.h>
int main()
{
    int OddNum[10];
    int index = 0;
    // Storing odd numbers
    for(int i =0;i<20;i++)
    {
        if(i%2!=0)
        {
            OddNum[index] = i;
            ++index;
        }
    }
    // printing odd numbers
    printf("OddNum[10] = {");
    for(int i = 0;i<10; i++)
    {
        if(i!=9)
        {
            printf("%d, ",OddNum[i]);
        }
        else
        {
            printf("%d} ",OddNum[i]);
        }
    }
    return 0;
}

// OUTPUT 
// OddNum[10] = {1, 3, 5, 7, 9, 11, 13, 15, 17, 19}


// 3) Find the Sum of all the elements in an array
// CODE 
#include<stdio.h>
int main()
{
    int size;
    printf("How many values you have = ");
    scanf("%d",&size);
    int array[size];
    int sum=0;
    for(int i = 0;i<size;i++)
    {
        printf("Enter the value of arra[%d] = ",i);
        scanf("%d",&array[i]);
    }
    for(int i = 0;i<size;i++)
    {
        sum += array[i];
    }
    printf("Sum of Array = %d",sum);
    return 0;
}

// OUTPUT 
// How many values you have = 7
// Enter the value of arra[0] = 23
// Enter the value of arra[1] = 24
// Enter the value of arra[2] = 45
// Enter the value of arra[3] = 46
// Enter the value of arra[4] = 23
// Enter the value of arra[5] = 46
// Enter the value of arra[6] = 35
// Sum of Array = 242


// 4) Find Minimum number from an array
// CODE 
#include<stdio.h>
int main()
{
    int size;
    printf("How many values you have = ");
    scanf("%d", &size);
    int array[size], index = 0;
    printf("Enter %d Integers\n", size);

    for (int i = 0; i < size; i++)
    {
        printf("Enter a value of array[%d] = ",i);
        scanf("%d", &array[i]);
    }

    for (int i = 1; i < size; i++)
    {
        if (array[i] < array[index])
        {
            index = i;
        }
    }
    printf("Minimun value of array\n");
    printf("Index : %d \nValue : %d", index+1, array[index]);
    return 0;
}

// OUTPUT 
// How many values you have = 7
// Enter 7 Integers
// Enter a value of array[0] = 34
// Enter a value of array[1] = 54
// Enter a value of array[2] = 75
// Enter a value of array[3] = 35
// Enter a value of array[4] = 24
// Enter a value of array[5] = 46
// Enter a value of array[6] = 75
// Minimun value of array
// Index : 5 
// Value : 24