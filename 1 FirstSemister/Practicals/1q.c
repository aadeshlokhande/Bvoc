// 3.Write an algorithm, draw a flowchart and write a program code to display 3*3 Identity Matrix

// Program:-
#include<stdio.h>
int main()
{
    for(int i = 0 ; i < 3 ;i++)
    {
        for(int j = 0; j<3; j++)
        {
            if(i==j)
            {
                printf("1 ");
            }
            else
            {
                printf("0 ");
            }
        }
        printf("\n");
    }
}