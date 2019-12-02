#include <stdio.h>

int main()
{
	int i;
	int faol=1;
	int count=0;
	int sum;
	int count1=10000000;
	int s=0;
	float v;
	int j=0;
	printf("请输入:\n");
	while(faol){
		scanf("%d",&i);
		j+=i;
		if(i==0)break;
		if(i>count){
			count=i;
		}
		if(i<count1){
			count1=i;
		}
		s++;
		v=j/s;

	}
	printf("最大值是%d\n",count);
	printf("最小值是%d\n",count1);
	printf("平均值是%f\n",v);

	return 0;
}
