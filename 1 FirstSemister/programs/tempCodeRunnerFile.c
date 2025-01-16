#include<stdio.h>
int Subtraction(int a, int b)
{
    return a-b;
}

int main()
{
    int a,b,c;
    printf("Enter a number = ");
    scanf("%d",&a);
    printf("Enter a number = ");
    scanf("%d",&b);
    c = Subtraction(a,b);
    printf("Subtraction = %d",c);
    return 0;
}