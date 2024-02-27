// 7. program for tower of HANOI 
using namespace std;
#include<iostream>

int tower(int, char, char, char);
int main()
{
    
    int n ;
    cout<<"\n\t enter the number of disk = ";
    cin >> n;
    tower(n,'A','B','C');
    return 0;
};

int tower(int n, char beg, char aux, char end)
{
    if(n==1)
    {
        cout<<"\n\t disk"<<n<<"\t moves from \t"<<beg<<" -> "<<end;
        return 0;
    }
    else 
    {
        tower(n-1,beg,end,aux);
    }

    cout<<"\n\t Disk "<<n << "\t moves from \t"<<beg<<" -> "<<aux;
    tower(n-1,aux,beg,end);
}
