# vue


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>vue

安装

​	npm install -g @vue/cli-service-global

​	vue create vue-mart

	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>ajxa
	ajxa get方法axios
	methods:{
	                getJoke:function(){
	                    console.log(this.a)
	                    axios.get("https://autumnfish.cn/api/joke")
	                    	.then((res)=>{
	                            console.log(res)
	                            console.log(this.a)
	                        })
	                        .catch(err)=>{
	                            console.log(err)
	                        })
	                }
	            }

## 基础

1. el 挂载点(挂载DOM选择器)

   ~~~
   简单的实例
   <div>{{messae}}</div>
   <div v-text="info"></div>
   var App = new Vue({
   	le:"#app",
   	data:{
   		message:"xxiao",
   		info:'aaa'
   	}
   })
   ~~~

2. data 写数据

3. methods 写方法

4. computed 计算属性

5. components 注册组件,

6. props 父组件向子组件传参

7. watch 可以监听data,props属性的改变,里面写方法并且有两个参数newValue,oldValue,一个是改变的参数,一个是原来的参数

## 实例

1. 一些实用
   - v-if 判断直接删除DOM树隐藏显示,可以和v-else配合使用和v-else-if来配合使用

   - v-show 判断修改style的属性
   - v-on 事件绑定 例如@click 点击事件
   - v-bind: 直接修改标签内部的属性值例如 v-bind:src="message"  就可以更改值,简写:title :class 
   - v-text 改变标签得内容
   - v-html 可以data添加标签
   - v-for 用于对数组和对象的循环 div v-fro="item,index in arr">{{item}}<>
   - .push()添加数据
   - .shift()删除数据
   - .splice(index,1)根据索引删除或添加数据,一个参数是从第几个开始删,第二个是删除几个.如果第二个参数为0的话,就在第三个参数就是添加的值或字符串,,最好可以和key=""来使用,可以增强添加数据的算法,也可以做替换
   - @keyup 是键盘事件 可用@keyup.enter="dome" 就可以只是回车触发的键盘事件
   - v-model 获取和设置表单元素的值(双向数据绑定)
   - v-on play 监听音乐播放@play
   - v-on pause 监听音乐停止@pause
   - v-once 这是个属性可以放到Dom里可以让data的数据更新以后页面也不会重新渲染
   - v-html 可以解析html标签 v-html=<"a>a</a>"可以解析data传过来的标签,就不用{{}}渲染了
   - v-pre 让html直接显示{{}}的内容不用解析

   1. v-on修饰符@

   - .stop 修饰符可以阻止子元素的冒泡.例@click.stop="domo1()"

   - .prevent 阻止默认行为,例如a标签跳转,表单提交

   - .once 这是个属性可以放到Dom里可以让data的数据更新以后页面也不会重新渲染

   2. 一些删除的方法

      - .pop() 删除最后一个数组的键
      - .shift() 删除第一个数组的键
      - .unshift() 在数组最前面添加元素

      - .revrese() 将数组的排序颠倒
      - Vue.set(要修改的对象,索引值,修改后的值)
3. 常用
   
   - .toFixed() 小数点后面保存几位数
   - 当@input='input'监听监听是将value的值传给这个方法,在这个方法就有一个形参event  打印event.target.value就是获取的input的值
   4. v-model的修饰符
      - .lazy 懒加载,在进行数据改变时,只有敲击回车或失去焦点才会让绑定的数据改变
      - .number 可以更改输入的类型变成数字类型,不然输入的一定是string类型
      - .trim 可以让输入的input里的两边的空格过滤掉,

## 组件化

#### 1. 页面的简单组件化(全局)

   - Vue.extend()创建组件构造器对象
   - Vue.component('my-cpn',cpnC)注册组件
   - <my-cpn> 使用组件

   - ~~~
         <div id="app">
             <my-cpn></my-cpn>
         </div>
     </body>
     <script src="../../vue.js"></script>
     <script>
         //1.创建组件构造器对象
         const cpnC = Vue.extend({
             template:`<p>我是标题</p>`
         })
         // 2.注册组件
         Vue.component('my-cpn',cpnC)
     ~~~

   - 局部组件

   - ~~~
         const app = new Vue({
             el:'#app',
             components:{
             	my-cpn,cpnC
             }
         })
     ~~~

   - 写组件时个可以直接写注册组件

     ~~~
     Vue.component('my-cpn',{
     	template:'#cpn',
     	data(){
     		return{
     			title:'abc'
     		}
     	},
     	methods:{
     	
     	}
     })
     ~~~

   - 在组件内部要使用data数据,的话data是一个函数并且return一个{对象}

   #### 2. 简单的父传子props

     ~~~
         <div id="app">
             <cpn :cemssage='message' ></cpn>
         </div>
     
         <template id="cpn">
             <div>
                 <p>{{cemssage}}</p>
             </div>
         </template>
         <script src="../../vue.js"></script>
         <script>
             Vue.component('cpn',{
                 template:'#cpn',
                 data(){
                     return{
                         title:'ddd',
                         counter:0
                     }
                 },
                 props:['cemssage']
             })
             const app = new Vue({
                 el:'#app',
                 data:{
                     message:'nihao'
                 }
             })
         </script>
     ~~~

   - props可以有很多形式最好用对象这样可以定义穿过来的类型

     - ~~~
       props:{
       	title:String,
       	arr:Array,
       	number:Number,
       	boolean:Boolean,
       	obj:Object,
       	date:Date,
       	function:Function,
       	symbol:Symbol,
       	cmessage:{
       		type:String,
       		default:'aaaa',
       		required:true
       	}
       }
       //也可以用嵌套对象的形式来填写默认值default如果类型是数组或对象的话defalut就是一	个函数可以返回默认值return{}或return[]
       //type来定义类型,
       //如果required为true的话这个cmessage这个传过来的值必须要有的
       ~~~

     - 

   #### 3. 子组件向父组件传值

```js
  主要是通过this.$emit来发射一个函数方法并进行传参来传给父组件

 - 父组件是通过v-on来监听子组件传过来的方法

 - ~~~
       <div id="app">
       	<-- 通过@itemclick的方法来监听子组件传来的cpnclick方法和传过来的值 -->
           <cpn :ccounter='counter' @itemclick='cpnclick' ></cpn>
       </div>
       <template id="cpn">
           <div>
               <p>{{ccounter}}</p>
               <button v-for="item in abc" @click="btnClick(item)" >{{item.name}}</button>
           </div>
       </template>
   </body>
   <script src="../../vue.js"></script>
   <script>
   	//子组件
       const cpn = {
           template:'#cpn',
           data(){
               return {
                   abc:[
                       {id:'aaa',name:this.ccounter},
                       {id:'bbb',name:'bbb'},
                       {id:'ccc',name:'ccc'},
                       {id:'ddd',name:'ddd'}
                   ]
               }
           },
           props:{
               type:String,
               ccounter:''
           },
           methods:{
               btnClick(item){
                   console.log(item)
                   //通过this.$emit()来穿过去一个方法,并且传参
                   this.$emit('itemclick',item)
               }
           }
       }
       //父组件
       const app = new Vue({
           el:'#app',
           data:{
               counter:'aaaaaaaaa'
           },
           methods:{
               cpnclick(item){
                   console.log('zi',item.name)
               }
           },
           components:{
               cpn
           }
       })
   ~~~

 - 
```

### 4. 父组件调用子组件的方法

如果想要用到子组件的方法或data或methods等可以用

1. $children 数组通过键或直接 . 方法使用,不太方便
2. $refs 对象类型,通过this.$refs调取,但是得在要调取的子组件标签上起一个名字 ref="aaa" 然后就可以用this.$refs.aaa来调取子组件的方法和data .推荐使用

### 5. 子组件调用父组件的方法

	1. $parent 访问父组件
 	2. $root 直接访问跟组件

### 6.插槽

​	1. <solt></solt>在子组件里用,然后在调用的时候就可以往里面加标签就在插槽的位置加,也可以在插槽里面写默认值例如

<solt><button></button></solt>要想用多个插槽就要起名字在调用的时候要起加上slot="name",在插槽里写name="name"

2. 作用域插槽
   - 就要在slot标签里加上:data=""属性,给父组件要修的对象或数组,
   - 然后就可以在调用这个子组件是可以通过slot-scope="slot",这个属性就要在一个标签里加上然后就可以用slot.data的方式来调用

3. ~~~
       父组件
       <div id="app">
           <cpn>
           	//具名插槽和域名插槽
               <template slot-scope='slot' slot="bbb">
                   <span v-for="item in slot.data">{{item}}----</span>
               </template>
               //单纯的具名插槽
               <template v-slot:ccc >
                   <button>aa</button>
               </template>
           </cpn>
       </div>
       子组件
       <template id="cpn1" >
           <div>
               <slot :data='isarry' >
                   <ul>
                       <li v-for="item in isarry">{{item}}</li>
                   </ul>
               </slot>
               <slot name="bbb" :data="isarry">
                   <ul v-for="item in isarry">
                       <li>222}</li>
                   </ul>
               </slot>
               <slot name="ccc" :data="isarry">
                   <ul v-for="item in isarry">
                       <li>{333}</li>
                   </ul>
               </slot>
           </div>
   ~~~

4. 














# 流程

# webpack 
	笔记 ：webpack.md 


# vue cli 命令 	脚手架  （命令行工具 ）

## 下载安装
	npm install vue-cli -g  

## 生成应用
	vue init webpack ProjectName


## 使用应用
	cd ProjectName
	cnpm install

## 启动项目
	npm start 
	或
	npm run dev


## 项目的目录结构
	-|build/						// 项目打包的一些相关的配置
	-|config/						// 配置文件目录
	-|node_modules/					// 依赖的模块目录
	-|src/							// 项目的源码
	-|--|assets/					// 静态资源库 (这里的文件会被编译)
	-|--|components/				// 组件目录
	-|--|router/					// 路由目录
	-|--|--|index.js				// 路由文件
	-|--|App.vue					// 根组件
	-|--|main.js					// 入口文件
	-|static/						// 静态资源库
	-|index.html 					// 引用的 html 页面
	-|package.json					// 项目的配置文件
									（主要记录：项目的名称、作者、描述、启动命令、依赖的包）
	-|README.md						// 项目自述文件




# 脚手架

### 安装

~~~
npm install -g @vue/cli
vue create my-project
~~~

## 执行的命令

~~~
npm run serve
npm run dev
npm run build (打包)
~~~

## 路由

### 1. 安装

~~~
npm install vue-router --save
~~~

### 2. 配置

~~~js
// 配置路由相关的信息
import VueRouter from 'vue-router'
import Vue from 'vue'
// 引入需要路由的组件
import Home from '../components/Home'
import About from '../components/About'
import User from '../components/User'
// 1.通过Vue.use(插件),安装插件
Vue.use(VueRouter)
// 2.创建VueRouter对象
const routes = [
    // 路由简单的配置
    // redirect是从定向:可以让访问空或/是访问首页
    {
        path:'/',
        redirect:'/home'
    },
    {
        path:'/home',
        component:Home
    },
    {
        path:'/about',
        component:About
    }
]
const router = new VueRouter({
    // 配置路由和组件之间的应用关系,如果不要哈希/#/的话就加上mode:'history'
    routes,
    mode:'history'
})
// 3.将router对象传到Vue实例
export default router
~~~

### 3. 使用vue-router的步骤

- 第一步： 创建路由组件

- 第二步： 配置路由映射： 组件和路径映射关系

- 第三步:    使用路由通过<router-link>和<router-view>

- <router-view>就是占位符在template的里面是在哪里显示

- <router-link>的属性

  - to是跳转路由的名字,点击跳转
  - tag 可以指定link以什么标签展示出来tag = 'button'
  - replace 可以让url没有后退, replace没有属性值
    - active-class 是默认属性当路由配置成功后,点击谁会给谁加一个router-link-active的class的属性名.如果要改的的话可以在link标签中active-class='name'但是每个标签都要加,有一个简便方法:在路由文件里实例化VueRouter里加一个linkActiveclass:'name'的配置

- ~~~js
      <router-link to='/home'>首页</router-link>
      <router-link to='/about'>关于</router-link>
      <router-view></router-view>
  ~~~

- this.$router 可以在全局的组件使用它的指向就是实例化的VueRouter  ******

- 动态路由

- this.$route 是可以在全局的组件找到它的动态url,一般在二级url地址是动态的,可以获取到二级的名字this.$route.params.abc***********只有在点击谁的时候他才会获取,还要将path:'/user/:abc'前面加:

### 4. 懒加载

- 就要在引入组件的时候,换一下引入的方式,与上面的配置path和component不变

- ~~~js
  const Home = () => import('../components/Home')
  const About = () => import('../components/About')
  const User = () => import('../components/User')
  ~~~

### 5. 嵌套默认路径

- 嵌套路由也可以配置默认的路径,配置方式如下
- 记得<router-link><router-view>要在被嵌套的组件里的<template>写

- ~~~js
  	{
          // 主目录/被嵌套的
          path:'/home',
          component:Home,
          // 嵌套新的子路由的配置
          children:[
              // redirect是默认进入的路由页面
              {
                  path:'',
                  redirect:'news'
              },
              {
                  path:'news',
                  component:HomeNews
              },
              {
                  path:'message',
                  component:HomeMessage
              }
          ]
      },
  ~~~

### 6. vue-router参数传递

- 通过query来传递参数

- ~~~js
  通过query的对象在地址栏传参
  <router-link :to="{path:'/profile',query:{name:'xws',age:21}}">档案</router-link>
  在自己的组件内部获得$route.query获取
      <h2>{{$route.query.name}}</h2>
      <h2>{{$route.query.age}}</h2>
  ~~~

- 通过动态地址来传递参数///////动态路由

- ~~~
  name就是data里的参数.记得要看动态路由里的二级地址前加:代表这是可变的
  <router-link :to="'/user/'+name">用户</router-link>
  在自己的组件内部获得$route.params获取
      <h2>{{$route.params.abc}}</h2>
  但要记得加:
      {
          path:'/user/:abc',
          component:User
      },
  ~~~

### 7. 如果不用link标签跳转路由

- 就要用普通的标签写一个点击事件

- ~~~js
  <button @click="userclick" >用户</button>
  <button @click="profileclick" >档案</button>
  ~~~

- 然后在methods方法创建事件方法

- ~~~
  data(){
  	return {
  		id:123
  	}
  },
  methods:{
  	// 这是动态路由,$router要加this,因为在方法里this的指向变了
  	userClick(){
  		this.$router.push('/user/'+this.id)
  	},
  	// 这是通过query传参的方法,接收参数是跟6.一样
  	profileClick(){
  		this.$router.push({
  			path:'/profile',
  			query:{
  				name:'xws',
  				age:20
  			}
  		})
  	}
  }
  ~~~



### 8. 生命周期

- created() 当组件被创建就会回调这个函数
- mounted() 在将template的模板挂到DOM上的时候进行回调
- updated() 再页面刷新就调用