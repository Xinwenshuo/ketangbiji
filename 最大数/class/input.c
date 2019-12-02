#include <stdio.h>
#include "ping.c"
#include "max.c"
#include "min.c"
int main()
{

	int i;
	int faol;
	int s=0;
	int name;
	int max;
	int count=0;
	int min;
	printf("请输入:\n");
	while(faol){
		scanf("%d",&i);
		if(i==0)break;
		s++;
		count +=i;
		name = ping(count,s);
		max = max1(i);
		min = min1(i);
	}
	printf("最大值:%d\n",max);
	printf("最小值:%d\n",min);
	printf("平均值:%d\n",name);
	return 0;
}
