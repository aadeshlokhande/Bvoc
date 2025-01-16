// --------------------------------------------------------------
// Code By :- Aadesh Lokhande

// ***************** Today's Task **************************
// 1. Write a program to print
// 1 to 15 numbers 

// ALGORITHM
// Step 1: Start

// Step 2: Initialize variable int i = 1

// Step 3: For condition i <= 15

// Step 4: If i <= 15 If it is true, 
//             then go to step 5 otherwise to step 7

// Step 5: Print value of "i"

// Step 6: Increment the value of "i" by 1

// Step 7: Go to step 3

// Step 8: Stop



// CODE 
#include<stdio.h>
int main()
{
    for(int i = 1; i<=15; i++)
    {
        printf("%d ",i);
    }
}
// OUTPUT 
// 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15


// -----------------------------------------------------------

// 2.  Print odd numbers between 1 to 50
// Step 1: Start

// Step 2: Initialize variable int i = 1

// Step 3: For condition i <= 50

// Step 4: If i <= 50 If it is true, 
//             then go to step 5 otherwise to step 9

// Step 5: If i%2!=0 If it is true, 
//             then go to step 6 otherwise to step 7

// Step 6: Print value of "i"

// Step 7: Increment the value of "i" by 1

// Step 8: Go to step 3

// Step 9: Stop

// CODE 
#include<stdio.h>
int main()
{
    for(int i = 1; i<=50; i++)
    {
        if(i%2!=0)
        {
            printf("%d ",i);
        }
    }
    return 0;
}
// OUTPUT 
// 1 3 5 7 9 11 13 15 17 19 21 23 25 27 29 31 33 35 37 39 41 43 45 47 49 

// -----------------------------------------------------------

// 3 print  even numbers between 20 to 50

// Step 1: Start

// Step 2: Initialize variable int i = 20

// Step 3: For condition i <= 50

// Step 4: If i <= 50 If it is true, 
//             then go to step 5 otherwise to step 9

// Step 5: If i%2==0 If it is true, 
//             then go to step 6 otherwise to step 7

// Step 6: Print value of "i"

// Step 7: Increment the value of "i" by 1

// Step 8: Go to step 3

// Step 9: Stop

// CODE
#include<stdio.h>
int main()
{
    for(int i = 20; i<=50; i++)
    {
        if(i%2==0)
        {
            printf("%d ",i);
        }
    }
    return 0;
}
// OUTPUT 
// 20 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50

// -----------------------------------------------------------

// 4 find average of first 20 odd numbers

// Step 1: Start

// Step 2: Initialize variable int avrg, odd=0, i=1

// Step 3: For condition i <= 40

// Step 4: If i <= 40 If it is true, 
//             then go to step 5 otherwise to step 9

// Step 5: If i%2!=0 If it is true, 
//             then go to step 6 otherwise to step 7

// Step 6: odd += i

// Step 7: Increment the value of "i" by 1

// Step 8: Go to step 3

// Step 9: avrg = odd/20

// step 10: Print avrg

step 11: Stop

// CODE
#include<stdio.h>
int main()
{
    int avrg;
    int odd = 0;
    for(int i = 1; i<=40; i++)
    {
        if(i%2!=0)
        {
            odd += i;
        }
    }
    avrg = odd/20;
    printf("Average of first 20 odd number = %d", avrg);
    return 0;
}
// OUTPUT 
// Average of first 20 odd number = 20

// -----------------------------------------------------------

// 5 Print  
// ***


// Step 1: Start

// Step 2: Initialize variable int i = 1

// Step 3: For condition i <= 3

// Step 4: If i <= 3 If it is true, 
//             then go to step 5 otherwise to step 8

// Step 5: Print "*"

// Step 6: Increment the value of "i" by 1

// Step 7: Go to step 3

// Step 8: Stop

// code 
#include<stdio.h>
int main()
{
    for(int i = 1; i<=3; i++)
    {
        printf("*");
    }
    return 0;
}
// OUTPUT 
// ***

// -----------------------------------------------------------









