// --------------------------------------------------------
// Code By :- Aadesh Lokhande

// ***************** While Loop **************************
// 1. Write a program to print
// 1 to 15 numbers 

// CODE 
#include<stdio.h>
int main()
{
    int i = 1;
    while(i<=15)
    {
        printf("%d ",i);
        i++;
    }
}
// OUTPUT 
// 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15


// -----------------------------------------------------

// 2.  Print odd numbers between 1 to 50

// CODE 
#include<stdio.h>
int main()
{   
    int i = 1;
    while(i<=50)
    {
        if(i%2!=0)
        {
            printf("%d ",i);
        }
        i++;
    }
    return 0;
}
// OUTPUT 
// 1 3 5 7 9 11 13 15 17 19 21 23 25 27 29 31 33 35 37 39 41 43 45 47 49 

// -----------------------------------------------------------

// 3 print  even numbers between 20 to 50

// CODE
#include<stdio.h>
int main()
{
    int i = 20;
    while(i<=50)
    {
        if(i%2==0)
        {
            printf("%d ",i);
        }
        i++;
    }
    return 0;
}
// OUTPUT 
// 20 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50

// -----------------------------------------------------------

// 4 find average of first 20 odd numbers

// CODE
#include<stdio.h>
int main()
{
    int avrg,i = 1;
    int odd = 0;
    while(i<=40)
    {
        if(i%2!=0)
        {
            odd += i;
        }
        i++;
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

// code 
#include<stdio.h>
int main()
{
    int i = 1;
    while(i<=3)
    {
        printf("*");
        i++;
    }
    return 0;
}
// OUTPUT 
// ***

// -----------------------------------------------------------

// CODE :
#include<stdio.h>
int main()
{
    char ch = 'A';
    int i=0;
    while(i<3)
    {
        int j = 0;
        while(j<3)
        {
            printf("%c ",ch++);
            j++;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT 
// A B C 
// D E F 
// G H I 

// -------------------------------------

// Task No. 2
// CODE :
#include<stdio.h>
int main()
{
    int i=0;
    while(i<3)
    {
        int j = 3;
        while( j>i )
        {
            printf("* ");
            j--;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT 
// * * * 
// * * 
// * 

// -------------------------------------

// Task No. 3
// CODE :
#include<stdio.h>
int main()
{
    int a = 0;
    int i=0;
    while(i<3)
    {
        int j = 3;
        while(j>i)
        {
            ++a;
            printf("%d ",a);
            j--;
        }
        printf("\n");
        i++;
    }
    int k=2;
    while(k<=3)
    {
        int j = 0;
        while(j<k)
        {
            ++a;
            printf("%d ",a);
            j++;
        }
        printf("\n");
        k++;
    }
}
// OUTPUT :
// 1 2 3 
// 4 5 
// 6 
// 7 8 
// 9 10 11 

// --------------------------------------------

// Task No. 4
// CODE :
#include<stdio.h>
int main()
{
    int i=0;
    while(i<3)
    {
        int j = 0;
        while( j<3)
        {
            if(i==j)
            {
                printf("1 ");
            }
            else 
            {
                printf("0 ");
            }
            j++;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT :
// 1 0 0 
// 0 1 0 
// 0 0 1 

// --------------------------------------

// Task No. 5
// CODE :
#include<stdio.h>
int main()
{   
    int i=0;
    while(i<3)
    {
        int j = 0;
        while(j<3)
        {
            if(i<=j)
            {
                printf("1 ");
            }
            else 
            {
                printf("0 ");
            }
            j++;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT :
// 1 1 1 
// 0 1 1 
// 0 0 1 

// -----------------------------------------

// Task No. 6
// CODE 
#include<stdio.h>
int main()
{
    int i=0;
    while(i<3)
    {
        int j = 0;
        while( j<3)
        {
            if(i==0)
            {
                printf("1 ");
            }
            else 
            {
                printf("0 ");
            }
            j++;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT 
// 1 1 1 
// 0 0 0 
// 0 0 0 

// -----------------------------------------

// Task No. 7

// CODE 
#include<stdio.h>
int main()
{
    int i = 1;
    while(i<=3)
    {
        int j = 2;
        while(j>=i)
        {
            printf(" ");
            j--;
        }
        int k = 1;
        while(k<=i)
        {
            printf("* ");
            k++;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT:
//   * 
//  * * 
// * * *

// --------------------------------------


// CODE :
#include<stdio.h>
int main()
{
    int i = 1;
    while(i<=5)
    {
        int j = 1;
        while(j<=i)
        {
            printf("%d ",i);
            j++;
        }
        printf("\n");
        i++;
    }
}
// OUTPUT 
// 1 
// 2 2 
// 3 3 3 
// 4 4 4 4 
// 5 5 5 5 5 

// ---------------------------------------
// CODE :
#include<stdio.h>
int main()
{
    int i=5;
    while(i>=1)
    {
        int j = 1;
        while(j<=i)
        {
            printf("%d ",i);
            j++;
        }
        printf("\n");
        i--;
    }
}
// OUTPUT :
// 5 5 5 5 5 
// 4 4 4 4 
// 3 3 3 
// 2 2 
// 1 