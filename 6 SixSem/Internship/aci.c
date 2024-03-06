#include <stdio.h>

void bubbleSort(int array[], int size) 
{
    for (int step = 0; step < size - 1; ++step) 
    {
        for (int i = 0; i < size - step - 1; ++i) 
        {
            if (array[i] > array[i + 1]) 
            {
                int temp = array[i];
                array[i] = array[i + 1];
                array[i + 1] = temp;
            }
        }
    }
}

int main() 
{
    int data[] = {64, 34, 25, 12, 22, 11, 90};
    int size = sizeof(data) / sizeof(data[0]);
    bubbleSort(data, size);
    printf("Sorted array in ascending order:\n");
    for (int i = 0; i < size; ++i) 
    {
        printf("%d ", data[i]);
    }
    printf("\n");
    return 0;
}
