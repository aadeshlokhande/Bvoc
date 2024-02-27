#include<stdio.h>
int main()
{
    
    int marks[30],n,sum = 0,avg,mark, ex=1;
    printf("Enter a number of students = ");
    scanf("%d",&n);
    
    // marks le rahe hai
    if(n>=0 && n<=30)
    {
        for(int i=0;i<n; i++)
        {
            printf("Enter a marks of roll number %d = ",i);
            scanf("%d",&mark);
            if(mark>=0 && mark<=100)
            {
                marks[i]= mark;
            }
            else
            {
                ex = 0;
                goto kiran;
            }
        }
    }
    else
    {
        printf("Invalid input");
    }
    
    // average
    for(int i = 0; i<n; i++)
    {
        sum = sum + marks[i];
    }
    
    avg = sum/n;
    printf("average = %d\n",avg);
    
    for(int i = 0;i<n; i++)
    {
        if(marks[i]<avg)
        {
            printf("Roll Number %d = \t%d \t= B grade\n",i,marks[i]);
        }
        else
        {
            printf("Roll Number %d = \t%d \t= A grade\n",i,marks[i]);
        }
    }
    
    kiran:
    if(ex==0)
    {
        printf("Invalid Marks");
    }
    return 0;
}

