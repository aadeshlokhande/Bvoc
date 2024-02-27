// 5. PROGRAM TO PERFORM INSERTION OPERATION IN QUEUE

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
    int rear = 4;
    int front = 1;
    cout << "The queue brfore insertion";
    for(i = front; i<rear; i++)
    {
        cout<<"\t"<<info[i];
    }
    if (front==4)
    {
        cout<<"overflow";
    }
    else
    {
        item = info[rear];
    }

    if(rear==front)
    {
        rear = 0;
        front = 0;
    }
    else
    {
        rear = rear + 1;
    }

    cout<<"\n\nThe queue after insertion \n";
    for(i = front ; i<rear; i++)
    {
        cout<<"\t"<<info[i];
    }
}