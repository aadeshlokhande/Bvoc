// Display Matrix as
// 1)
// 9 8 7
// 6 5 4
// 3 2 1

// CODE 
#include<stdio.h>
int main()
{
    int num[3][3];
    int a = 9;
    for(int i = 0;i<3;i++)
    {
        for(int j = 0;j<3;j++)
        {
            num[i][j] = a--;
        }
    }

    for(int i = 0;i<3;i++)
    {
        for(int j = 0;j<3;j++)
        {
            printf("%d ",num[i][j]);
        }
        printf("\n");
    }
    return 0;
}
// ------------------------------

// 2)
// 0 1 0
// 1 0 1
// 0 1 0

// CODE 
#include<stdio.h>
int main()
{
    int num[3][3],a;
    for(int i = 0;i<3;i++)
    {
        for(int j = 0;j<3;j++)
        {
            a = i+j;
            if(a%2==0)
            {
                num[i][j] = 0;
            }
            else 
            {
                num[i][j] = 1;
            }
        }
    }

    for(int i = 0;i<3;i++)
    {
        for(int j = 0;j<3;j++)
        {
            printf("%d ",num[i][j]);
        }
        printf("\n");
    }
    return 0;
}

