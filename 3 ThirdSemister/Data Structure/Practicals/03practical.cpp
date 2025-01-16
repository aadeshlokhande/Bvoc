// 3. program for push in and array 

using namespace std;
#include<iostream>
class array
{
    int i, top, item, stack[8], maxstk;
    public:
        void getdata();
};

void array :: getdata(void)
{
    int maxstk = 8;
    cout<< "Enter element is to be insert into STACK(PUSH) = ";
    cin>>top;
    cout<<"Top = "<<top;
    if(top<maxstk)
    {
        for(i = 0; i < top; i++)
        {
            cout<<"\n"<<"Enter "<<i+1<<" element of array = ";
            cin>>stack[i];
        }
        cout<<"\n"<<"enter new element in STACK = ";
        cin>>item;
        
        if(top==maxstk)
        {
            cout<<"overflow";
        }
        else 
        {
            cout<<"\n item "<<item<<endl;
            stack[top] = item;
            cout<<"Stack after insertion = ";
            for(i = 0; i<top; i++)
            {
                cout<<"\n"<<stack[i];
            }
        }
    }
    else 
    {
        cout<< "size of array exceeds = ";
    }
};

int main()
{
    array a;
    a.getdata();
    return 0;
}