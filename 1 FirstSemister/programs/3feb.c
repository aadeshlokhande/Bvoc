// *********** DIVISION *************
// Code By Aadesh Lokhande
// __________________________________
// Method 1 : With Argument With Return 
#include<stdio.h>
int Division(int a, int b)
{
    return a/b;
}

int main()
{
    int a,b,c;
    printf("Enter a number = ");
    scanf("%d",&a);
    printf("Enter a number = ");
    scanf("%d",&b);
    c = Division(a,b);
    printf("Division = %d",c);
    return 0;
}

// Method 2 : With Argument Without Return 
#include<stdio.h>
int Division(int a, int b)
{
    printf("Division = %d",a/b);
}

int main()
{
    int a,b;
    printf("Enter a number = ");
    scanf("%d",&a);
    printf("Enter a number = ");
    scanf("%d",&b);
    Division(a,b);
    
    return 0;
}

// Method 3 : Without Argument With Return
#include<stdio.h>
int Division()
{
    int a,b;
    printf("Enter a number = ");
    scanf("%d",&a);
    printf("Enter a number = ");
    scanf("%d",&b);
    return a / b;
}

int main()
{
    int c;
    c = Division();
    printf("Division = %d",c);
    return 0;
}


// Method 4 : Without Argument Without Return
#include<stdio.h>
int Division()
{
    int a,b;
    printf("Enter a number = ");
    scanf("%d",&a);
    printf("Enter a number = ");
    scanf("%d",&b);
    printf("Division = %d",a/b);
}

int main()
{
    Division();
    return 0;
}

//*******************************************
//******************OUTPUT*******************
// >> Enter a number = 20
// >> Enter a number = 10
// >> Division = 2