// String Functions
// Code By Aadesh Lokhande

// 1) strlen(string_name)
// Description :- Returns the length of string name.

// Code : 
#include<stdio.h>
#include<string.h>
int main()
{
    char str[100];
    int lenStr;
    printf("Enter a String = ");
    scanf("%[^\n]s",str);
    lenStr = strlen(str);
    printf("Lenght of String = %d",lenStr);
    return 0;
}

// Output :
// Enter a String = My Name Is Aadesh Lokhande
// Lenght of String = 26
// **********************************************

// 2) strcpy(destination,source)
// Description :- copies the contents of source string to destination string.

// Code :
#include<stdio.h>
#include<string.h>
int main()
{
    char strSou[100],strDes[100];
    printf("Enter a String = ");
    scanf("%[^\n]s",strSou);
    
    strcpy(strDes,strSou);
    printf("Original String = %s\n",strSou);
    printf("Copied String = %s\n",strDes);
    return 0;
}

// Output :
// Enter a String = My Name Is Aadesh Lokhande
// Original String = My Name Is Aadesh Lokhande
// Copied String = My Name Is Aadesh Lokhande
// ****************************************

// 3) strcat(first_string, second_string)
// Description : concats or joins first string with second string.
// The result of the string is stored in first string.

// Code : 
#include<stdio.h>
#include<string.h>
int main()
{
    char str_1st[100],str_2nd[100];
    printf("Enter a First String = ");
    scanf("%s",str_1st);
    printf("Enter a Second String = ");
    scanf("%s",str_2nd);

    strcat(str_1st,str_2nd);
    printf("Concatinated String = %s\n",str_1st);
    return 0;
}

// Output :
// Enter a First String = Aadesh_
// Enter a Second String = Lokhande
// Concatinated String = Aadesh_Lokhande
// ****************************************

// 4) strcmp(first_string, second_string)
// Description : compares the first string with second string.
// If both strings are same, it returns 0.

// Code :
#include<stdio.h>
#include<string.h>
int main()
{
    char str_1st[100],str_2nd[100];
    int num;
    printf("Enter a First String = ");
    scanf("%s",str_1st);
    printf("Enter a Second String = ");
    scanf("%s",str_2nd);
    num = strcmp(str_1st,str_2nd);
    if(num==0)
    {
        printf("Both strings are same\n");
    }
    else 
    {
        printf("Both are different string\n");
    }
    return 0;
}

// Output :
// Enter a First String = Aadesh
// Enter a Second String = aadesh
// Both are different string
// ***************************************

// 5) strrev(string)
// Description : returns reverse string.

// Code :
#include<stdio.h>
#include<string.h>
int main()
{
    char str[100];
    printf("Enter a String = ");
    scanf("%[^\n]s",str);
    strrev(str);
    printf("Reverse string = %s",str);
    return 0;
}

// Output : 
// Enter a String = Aadesh Lokhande
// Reverse string = ednahkoL hsedaA
// ******************************************

// 6) strlwr(string)
// Description : returns string characters in lowercase.

// Code :
#include<stdio.h>
#include<string.h>
int main()
{
    char str[100];
    printf("Enter a String = ");
    scanf("%[^\n]s",str);
    strlwr(str);
    printf("Lower String = %s",str);
    return 0;
}

// Output :
// Enter a String = My Name Is Aadesh Lokhande
// Lower String = my name is aadesh lokhande
// *******************************************

// 7) strupr(string)
// Description : returns string characters in uppercase.

// Code :
#include<stdio.h>
#include<string.h>
int main()
{
    char str[100];
    printf("Enter a String = ");
    scanf("%[^\n]s",str);
    strupr(str);
    printf("Upper String = %s",str);
    return 0;
}

// Output :
// Enter a String = My Name Is Aadesh Lokhande
// Upper String =  MY NAME IS AADESH LOKHANDE
// *****************************************