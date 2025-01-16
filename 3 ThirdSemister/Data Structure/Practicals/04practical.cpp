// 4. program for pop in an array 

using namespace std;
#include<iostream>
class array
{
    int i, top, item, stack[8];
    public:
        void getdata();
};

void array :: getdata(void)
{
    cout<< "Enter element from into STACK = ";
    cin>>top;
    cout<<"\n Before deletion \n";
    
    for(i = 0; i < top; i++)
    {
        cout<<"\n"<<"Enter "<<i+1<<" element of STACK = ";
        cin>>stack[i];
    }
    
    if(top==0)
    {
        cout<<"underflow in stack";
    }
    else 
    {
        top = top - 1;
        
        cout<<"Stack after deletion = ";
        for(i = 0; i<top; i++)
        {
            cout<<"\n"<<stack[i];
        }
    }
};

int main()
{
    array a;
    a.getdata();
    return 0;
}