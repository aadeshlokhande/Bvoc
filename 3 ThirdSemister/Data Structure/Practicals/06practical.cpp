// 6. PROGRAM TO PERFORM DELETION OPERATION QUEUE

#include<iostream>
using namespace std;
class ary
{
    int i, item, info[10];
    public: 
        void getdata(void);
};

void ary :: getdata(void)
{
    int info[10] = {0,1,2,3,4,5};
    int rear = 5;
    int front = 1;
    cout<<"The queue before deletion";
    for(i = front; i<rear; i++)
    {
        cout<<"\t"<<info[i];
    }
    if(front==4)
    {
        cout<<"overflow";
    }
    else
    {
        item = info[front];
    }

    if(rear == front)
    {
        rear = 0;
        front = 0;
    }
    else 
    {
        front = front + 1;
    }

    cout << "\n\n The queue after deletion\n";
    for (i=front; i<=rear; i++)
    {
        cout<<"\t"<<info[i];
    }
}


int main()
{
    ary a;
    a.getdata();
    return 0;
}
