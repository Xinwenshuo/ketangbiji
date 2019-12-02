#include <stdio.h>

int main()
{
	int a[5] = {1,2,3,4,5};
	int (*ptr)[5]=&a+1;

	int *p = (int*)ptr;
	printf("%d,%d \n",*(a+1),*(p-1));

	return 0;
}
