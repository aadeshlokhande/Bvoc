#include<stdio.h>

struct student{
    char name[20];
    int age;
    char mobile[20];
    char email[100];
} aadesh;


int main()
{
    // struct student aadesh;
    // aadesh.name = "aadesh Lokhande";
    // printf("%s",aadesh.name);
    aadesh.age = 34;
    printf("\n%d\n",aadesh.age)  ;
    
}