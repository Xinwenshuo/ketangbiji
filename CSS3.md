# Css3

#### 以下不全

filter: 滤镜

~~~
参数
filter:blur(npx)模糊处理
~~~

calc()

~~~
width:calc(100%-80px);可以用+-*/来计算
~~~

过渡

~~~
transition: 变化的属性 花费时间 运动曲线 何时开始；(后两个可以不写)
transition: width 1S ease 1s;
transition: width 1s , height 2s ,background 1s ;变化的属性过多就可以用','分开
也可以让所有的属性都变化用all
~~~

动画

~~~
有两个属性transition和animation。并和transform动画属性常用但不是动画属性
运动的方向的：alternate(运动完再返回) reverse(反向播放)
播放的状态: forwards(播放完成以后回到最后的状态)
animation: 动画名字 花费时间 运动曲线 播放次数(infinite无线播放) 运动的方向 播放的状态
animation: move 2s linear;
@keyframes move{
	0%{
			transfrom:rotate(45deg)
	}
	100%{
			transfrom:rotate(90deg)
	}
}
animation-play-state:paused;动画暂停

~~~

旋转

~~~
transfrom:rotate(45deg)
transfrom:rotate3d(x,y,z) 3d旋转效果
transform:translateY(200px) 向y轴运动
transform:translateX(200px) 向x轴运动
transform:translateZ(200px) 向z轴运动
transfrom:scale(1.5) 缩放效果
transfrom:skew(40deg,30deg) 倾斜效果
以上效果都可以做3d和XYZ效果
~~~

