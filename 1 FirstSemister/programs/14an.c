// // CODE BY AADESH LOKHANDE 
// // =========================================
// // Task No. 1

// ALGORITHM
// step 1 : START
// step 2 : Initialize variable char ch = 'A' 
// step 3 : Initialize variable int i = 0 
// step 4 : check FOR condition i<3
// step 5 : If the condition is true, 
//             then go to step 6 otherwise go to step 16
// step 6 : Initialize variable int j = 0
// step 7 : check FOR condition j<3
// step 8 : If the condition is true, 
//             then go to step 9 otherwise go to step 13
// step 9 : Print Value of ch 
// step 10: Increament value of ch with 1
// step 11: increament value of j
// step 12: Go To step 7 
// step 13: print "\n" for new line
// step 14: increament value of i
// step 15: Go To step 4
// step 16: End


// // CODE :
// #include<stdio.h>
// int main()
// {
//     char ch = 'A';
//     for(int i=0;i<3;i++)
//     {
//         for(int j = 0; j<3; j++)
//         {
//             printf("%c ",ch++);
//         }
//         printf("\n");
//     }
// }
// // OUTPUT 
// // A B C 
// // D E F 
// // G H I 

// // =========================================

// // Task No. 2
// // CODE :
// #include<stdio.h>
// int main()
// {
//     for(int i=0;i<3;i++)
//     {
//         for(int j = 3; j>i; j--)
//         {
//             printf("* ");
//         }
//         printf("\n");
//     }
// }
// // OUTPUT 
// // * * * 
// // * * 
// // * 

// // =========================================

// // Task No. 3
// // CODE :
// #include<stdio.h>
// int main()
// {
//     int a = 0;
//     for(int i=0;i<3;i++)
//     {
//         for(int j = 3; j>i; j--)
//         {
//             ++a;
//             printf("%d ",a);
//         }
//         printf("\n");
//     }
//     for(int i=2;i<=3;i++)
//     {
//         for(int j = 0; j<i; j++)
//         {
//             ++a;
//             printf("%d ",a);
//         }
//         printf("\n");
//     }
// }
// // OUTPUT :
// // 1 2 3 
// // 4 5 
// // 6 
// // 7 8 
// // 9 10 11 

// // =========================================

// // Task No. 4
// // CODE :
// #include<stdio.h>
// int main()
// {
//     for(int i=0;i<3;i++)
//     {
//         for(int j = 0; j<3; j++)
//         {
//             if(i==j)
//             {
//                 printf("1 ");
//             }
//             else 
//             {
//                 printf("0 ");
//             }
//         }
//         printf("\n");
//     }
// }
// // OUTPUT :
// // 1 0 0 
// // 0 1 0 
// // 0 0 1 

// // =========================================

// // Task No. 5
// // CODE :
// #include<stdio.h>
// int main()
// {
//     for(int i=0;i<3;i++)
//     {
//         for(int j = 0; j<3; j++)
//         {
//             if(i<=j)
//             {
//                 printf("1 ");
//             }
//             else 
//             {
//                 printf("0 ");
//             }
//         }
//         printf("\n");
//     }
// }
// // OUTPUT :
// // 1 1 1 
// // 0 1 1 
// // 0 0 1 

// // =========================================

// // Task No. 6
// // CODE 
// #include<stdio.h>
// int main()
// {
//     for(int i=0;i<3;i++)
//     {
//         for(int j = 0; j<3; j++)
//         {
//             if(i==0)
//             {
//                 printf("1 ");
//             }
//             else 
//             {
//                 printf("0 ");
//             }
//         }
//         printf("\n");
//     }
// }
// // OUTPUT 
// // 1 1 1 
// // 0 0 0 
// // 0 0 0 

// // =========================================

// // Task No. 7
// // CODE 
// #include<stdio.h>
// int main()
// {
//     for(int i=1;i<=3;i++)
//     {
//         for(int j = 2; j>=i; j--)
//         {
//             printf(" ");
//         }
//         for(int j = 1; j<=i; j++)
//         {
//             printf("* ");
//         }
//         printf("\n");
//     }
// }
// // OUTPUT:
// //   * 
// //  * * 
// // * * *

// =======================================


// CODE :
// #include<stdio.h>
// int main()
// {
//     for(int i=1;i<=5;i++)
//     {
//         for(int j = 1; j<=i; j++)
//         {
//             printf("%d ",i);
//         }
//         printf("\n");
//     }
// }
// OUTPUT 
// 1 
// 2 2 
// 3 3 3 
// 4 4 4 4 
// 5 5 5 5 5 


// CODE :
// #include<stdio.h>
// int main()
// {
//     for(int i=5;i>=1;i--)
//     {
//         for(int j = 1; j<=i; j++)
//         {
//             printf("%d ",i);
//         }
//         printf("\n");
//     }
// }
// OUTPUT :
// 5 5 5 5 5 
// 4 4 4 4 
// 3 3 3 
// 2 2 
// 1 