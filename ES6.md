# ES6

## 新增基本的方法

1. 关于数组对象的遍历

   forEach() 直接遍历 

   map() 可以对数组做一些更改，也可以用函数来返回一个数组中指定的值

   filter() 可以直接用函数来返回一个有判断name条件的值，可以做多层判断中间用&&来分隔开

   - let num = nums.filter(funtion(n){return n<100})函数返回的必须是布尔值

   find() 这个方法与filter差不多就是判断的时候找到对应的值以后不会往下执行，减少代码运行时间

   every() 一假即假，再做判断的时候数组或对象中有一个为false，返回值则为false，并且之后的不会在遍历了

   some() 一真即真，再做判断的时候数组或对象中有一个为true，返回值则为true，并且之后的不会在遍历了

   reduce() 可以求和，需要reduce(function(sum,sum1){},0)需要传入两个参数，第一个要有一个初始值，第二个就是要求和的数组。也可以将一个对象的属性值抽到一个数组中，第一个是数组，第二个就是要抽离的对象abc.reduce(function(sum,sum1),{sum.push(sum1.name)}[])

2. 两个声明的var

   let 是有作用域的出了作用域就不起作用，

   const 是声明常量的，要是声明的数值，字符串的话不可以改变，要是声明数组的话可以往里面push()内容，但不可以改变类型

3. 对象和对象的继承

   ~~~
   class Car{//对象的声明
   
   ​	constructor({title}){//es6里这个要进行传参，
   
   ​		this.title = title;
   
   ​		drive(){
   
   ​			return 'vroom'
   
   ​		}
   
   ​	}
   
   }
   
   const car = new Car({title:'BMW'})
   
   //继承
   
   class Toyota extends Car{
   
   ​	constructor(options){
   
   ​		super(options);//继承必须要有这个
   
   ​		this.color = options.color
   
   ​	}
   
   }
   
   const toyota = new Toyota({color:'red',title:'Focus'})
   ~~~

   

   4. 生成器generator

   ~~~
   function* name(a){//声明
   	yeld 'xx'//返回值
   }
   //两种方法第二种方便
   //const namese = name() 
   //console.log(namese.next());
   for (var namese of name()){
   	console.log(namese)
   }
   ~~~


5. Map()   const map = new Map()

6. Set()   const set = new Set()

   ```
   可以储存任何数据类型，并且是唯一的（不重复的值）
   set1.add(100);
   set1.add('abc')
   不可以添加重复的值
   ```

7. Promise

   ```
   构造函数 Promise
   let promise = new Promise((resolve,reject)=>{
   	resove();//这个方法是在任务完成，没有问题调用then()
   	reject();//这个方法是在任务完成，有问题发生调用catch()
   })
   promise
   	.then(()=>console.log('成功，没有任何问题'))
   	.then(()=>console.log('成功，可以无限调用then方法'))
   	.catch(()=>console.log('uh oh,出现了重大问题'))
   ```

7. (1) fetch Api 

```
获取本地文本数据
function getText(){
	fetch('文件名字是test.txt')
		.then((res)=> res.test());
		.then(data=>{
			console.log(data);
			docuemnt.getElementById('a').innerHTML = data
		})
		.catch(err = >console.log(err))
}
要是请求josn数据只需要把文件名和后缀名改了
```

7. (2)使用promise来封装http穿数据

   ~~~
   class EasyHttp{
   	//get方法
   	get(url){
   		return new Promise(resolve,reject)=>{
   			fetch(url)
   				.then(res=>res.json)
   				.then(data=>resolve(data))
   				.catch(err=>reject(err))
   		}
   	}
   	//post方法
   	post(url,data){
   		return new Promise(resolve,reject)=>{
   			fetch(url,{
   				method:"POST",
   				headers:{
   					'Content-type':'application/json'
   				},
   				body:JSON,stringify(data)
   			})
   				.then(res=>res.json())
   				.then(data=>resolve(data))
   				.catch(err=>reject(err))
   		}
   	} 
   	//post user
   	http.post('地址',data)
   		.then(data=>console.log(data))
   		.catch(err=>console.log(err))
   	//put方法
   	put(url,data){
   		return new Promise(resolve,reject)=>{
   			fetch(url,{
   				method:"PUT",
   				headers:{
   					'Content-type':'application/json'
   				},
   				body:JSON,stringify(data)
   			})
   				.then(res=>res.json())
   				.then(data=>resolve(data))
   				.catch(err=>reject(err))
   		}
   	}
   	//update user
   	http.put('地址id',data)
   		.then(data=>console.log(data))
   		.catch(err=>console.log(err))
   	//delete方法
   	dalete(url){
   		return new Promise(resolve,reject)=>{
   			fetch(url,{
   				method:"POST",
   				headers:{
   					'Content-type':'application/json'
   				},
   				body:JSON,stringify(data)
   			})
   				.then(res=>res.json())
   				.then(data=>resolve('数据删除成功'))
   				.catch(err=>reject(err))
   		}
   	} 
   	//delete user
   	http.delete('地址id')
		.then(data=>console.log(data))
   		.catch(err=>console.log(err))
   }
   ~~~
   
   

