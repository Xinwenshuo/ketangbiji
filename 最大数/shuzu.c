#include <stdio.h>

int main()
{
	char a[5]="abcde";
	char *p = a;
	//*p+=3;
	printf("===%c\n",a[1]);
	printf("===%c\n",*(p+3));
	printf("===%c\n",*p);
	return 0;
}
