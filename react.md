# react 笔记

```
$ cnpm install -g create-react-app
$ create-react-app my-app
$ cd my-app/
$ npm start
```

1.安装webpack打包工具

	先做一个配置文件npm init
	
	* 安装npm i webpack webpack-cli -g (全局安装)
	* 安装npm i webpack webpack-cli -D
	创建一个src目录index.js文件
	在配置文件里scripts对象下写"build":"webpack --mode prodeuction",压缩版
	在配置文件里scripts对象下写"build":"webpack --mode development",非压缩版
	
	在创建一个webpack.config.js文件里写的是webpack的配置
		当创建的配置文件不在根目录在scripts文件夹里就需要在.json文件里加上
		--config scripts/webpack.config.js  不然执行npm run build命令找不到文件
		还要记得把webpack配置文件出口修改目录的方法换掉__dirname换成process.cwd()方法
	
	方法一:执行npm run build命令
		const path = require('path')//出口模块node.js
		module.exports = {
			entry: './src/index.js'//入口
			output: {
				path:path.resolve(__dirname,'dist'),//修改出口目录
				filename: 'main.js'//出口文件名
			}
		}
	方法二:执行npm run build命令
	const path = require('path')//出口模块node.js
	module.exports = {
		entry:{
			main: './src/index.js'//入口
			about: './src/about.js'//可多个文件入口
		}
		output: {
			path:path.resolve(__dirname,'dist'),//修改出口目录
			filename: '[name].[chunkHash:8].js'//出口文件名是随机的8位
		}
	}


```
安装html的包
	npm i --save-dev html-webpack-plugin
	在webpack配置文件引入
		const HtmlWebpackPlugin = require("html-webpack-plugin")//方法
		//出口
		,plugins:[
			new HtmlWebpackPlugin({
				title: 'webpack',
				template: 'public/index.html'//将哪个目录下的html文件转换就不用引入随机后的js文件
			}) //调用这个方法
		]
```



```
安装css的包
	npm i --save-dev css-loader
	npm i style-loader -D
	npm install --save-dev mini-css-extract-plugin
	记得要在index.js文件中引入css文件 import './indexcss'
	在webpack配置文件引入
		const MiniCssExtractPlugin = require("mini-css-extract-plugin")//方法
		//出口
		,module:{
			rules: [
				{
					test:/\.css$/,
					use: [
						'MiniCssExtractPlugin.loader',
						'css-loader'
					],
				},
			]
		},
		plugins:[
			new MiniCssExtractPlugin({
				filename: '[name].css'
			})
		]
```

```
webpack自动刷新
安装npm install webpack-dev-server --save dev
在json配置文件中加 "dev":"webpack-dev-server --mode







--config scripts/webpack.config.js",
执行命令 npm run dev
也可以在webpack.config.js配置文件中加
,devServer: {
	port:3000,//端口号
	open: trun//自动打开
}
```

```
less预编译器
安装 npm install less-loader less --save-dev
还要在webpack.config.js配置文件中加
		,module:{
			rules: [
				{
					test:/\.css$/,
					use: [
						MiniCssExtractPlugin.loader,
						'css-loader'
					],
				},{
					test:/\.less$/,
					use:[
						MiniCssExtractPlugin.loader,
						'css-loader',
						{
							loader:'less-loader',
						}
					]
				}
			],
		},
```

```
安装图片的包
npm install file-loader --save-dev
然后在webpack.config.js配置文件中
		,module:{
			rules: [
				{
					text:/\.css$/,
					use: [
						'MiniCssExtractPlugin.loader',
						'css-loader'
					],
				},{
					test:/\.(png|ipg|gif)$/,
					use:[
						{
							loader:'file-loader',
							options:{
								name: '[name].[ext]',
								outputPath: 'static/images',
								publicPath:'/static/images'
							},
						}
					]
				}
			],
		},
```

```
处理静态文件
在webpack.config.js配置文件中加(就是复制到哪个文件夹)
	const CopyPlugin = require('copy-webpack-plugin')
	new CopyPlugin([
		{
			from:path.resolve(process.cwd(),'src/static/'),//入口
			to:path.resolve(process.cwd(),'dist/static'),//出口
		}
	])
```

## 2. react的cra

   安装cra环境npx create-react-app my-app

   打开目录cd my-app

   执行命令npm start



+ 学习

3. 创建组件的第一个方式

   在src目录的index.js文件写jsx

   - 如果需要筛选字符串或数组类型等请安装npm install --save prop-types
   
   ```
   import React from 'react'
   import ReactDOM from 'react-dom'
   
   // 这种方式可以理解为创建了一个简单的react元素
   // const app = <h1>welcome React!!!</h1>
   
   // // 第一种箭头函数
   // const createApp = (props) =>{
   //     return (
   //         <div>
   //             {/* 只要在jsx里插入js的代码,就加一层花括号即可,注释也是js,所以这里的的注释就加了一层花括号 */}
   //             <h1>Welcome {props.title}!!! </h1>
   //             <p>优秀的{props.title} </p>
   //         </div>
   //     )
   // }
   // // 调用方法
   // const app = createApp({
   //     title: 'React 16.8'
   // })
   // ReactDOM.render(
   //     app,
   //     document.querySelector('#root')
   // )
   
   //第二种
   // 创建组建的第一种方式: 使用箭头函数,但是这个名字要大写开始.
   const App = (props) =>{
       return (
           <div>
               {/* 只要在jsx里插入js的代码,就加一层花括号即可,注释也是js,所以这里的的注释就加了一层花括号 */}
               <h1 title={props.title}>Welcome {props.title}!!! </h1>
               <p>优秀的{props.title} </p>
           </div>
       )
   }
   ReactDOM.render(
       <App title="1901"/>,
       document.querySelector('#root')
)
   ```
   
   

4.类的组件化创建和调用

```
import React from 'react'
import {render} from 'react-dom'


// 定义组件的第二种方式,使用类

class App extends React.Component {
    render () {
        console.log(this.props)
        return (
            <div>
                <h1>类组件</h1>
                <p>{this.props.desc}</p>
            </div>
        ) 
    }
}
//类组件渲染的原理
// render是react.dom提供的一个方法,这个方法通常只会用一次
// 直接调用
render(
    <App desc="类组件是继承Rreact.Component的" x="abc" />,
    document.querySelector('#root')
)
// // 实例化调用
// const app = new App({
//     desc: '类组件是继承Rreact.Component的'
// }).render()
// render(
//     app,
//     document.querySelector('#root')
// )


// 在react16以前,使用这种方式来创建一个类组件
// 这是早期的现在不用了
// React.createClass({
//     render(){
//         return <h1>xxxxxxxxxx</h1>
//     }
// })
```

5. jsx原理

   ```
   import React,{Component} from 'react'
   import {render} from 'react-dom'
   
   // 这里是使用类的形式创建的组件,这是jsx的语法,但不是合法的js代码
   // class App extends Component {
   //     render(){
   //         return (
   //             <div className="app" id="appRoot">
   //                 <h1 className="title">JSX原理</h1>
   //                 <p>类组件是继承React.Component的</p>
   //             </div>
   //         )
   //     }
   // }
   
   // 所以react在真正的渲染的时候会把上面的代码编译为下面这个样子来运行,下面的代码就是合法的js代码
       class App extends Component{
           render (){
               return (
                   //React.createElement是一个方法,用于创建元素,可以有很多的参数,但是前两个是固定的:
                   //第一个可以理解为标签名
                   //第二个可以理解为标签的属性
                   //剩下的,你就继续写更多的子元素吧
                   //React.createElement(type,[props],[...children])
                   React.createElement(
                       'div',
                       {
                           className:'app',
                           id:'appRoot'
                       },
                       React.createElement(
                           'h1',
                           {
                               className:'title'
                           },
                           'jsx原理'
                       ),
                       React.createElement(
                           'p',
                           null,
                           '类组件是继承React.Component的'
                       )
                   )
               )
           }
       }
       render(
           <App />,
           document.querySelector('#root')
       )
   ```

6. css的style样式

   ```
   第三方安装包
   cnpm i classname -S //只有动态添加不同的classname得时候用,正常可以不用这个
   npm i styled-components -S
   
   
   import React,{Component} from 'react'
   import {render} from 'react-dom'
   import className from 'classnames'
   import styled from 'styled-components'
   import './index.css'
   
   const Title = styled.h1`
       color:#F00
   `
   
   
   //样式的第一种方法
   class App extends Component{
       render(){
           const style ={color:'red'}
           return (
               <div>
               	<Title>aaaaaaaaaaa</Title>
                   <h1>元素中的样式</h1>
                   <ol>
                       <li style={style}>使用style内联创建</li>
                       <li className="has-text-red">使用class的方式,但是在react里class要写成className</li>
                       <li className={className('a',{'b':true,'c':false})}>
                           要动态添加不同的className就可以使用第三方的包叫classNames,比如这个li标签上就只有a,b,没有c
                       </li>
                   </ol>
               </div>
           )
       }
   }
   render(
       <App />,
       document.querySelector('#root')
   )
   ```
   

## 2. 组件的通信,和react实现添加和删除操作

```
//TodoList.js文件
import React, { Component } from 'react'
import TodoItem from './TodoItem';
export default class TodoList extends Component {
  constructor(props){
    super(props);
    this.state = {
      list:[],
      inputValue:''
    }
  }
  handleBtnClick(){
    this.setState({
      list:[...this.state.list,this.state.inputValue],
      inputValue:''
    })
  }
  handleInputChange(e){
    this.setState({
      inputValue: e.target.value
    })
  }
  handleItemclick(index){
    const list = [...this.state.list];
    list.splice(index,1);
    this.setState({
      list:list
    })
  }
  handleDetele(index){
    const list = [...this.state.list];
    list.splice(index,1);
    this.setState({
      list:list
    })
  }
  //父组件通过属性的形式向子组件传递参数
  //子组件通过props接收父组件传递过来的参数
  render() {
    return (
      <>
      <div>
        <input value={this.state.inputValue}  onChange={this.handleInputChange.bind(this)} />
        <button onClick={this.handleBtnClick.bind(this)}>add</button>
      </div>
        <ul>
          {
            this.state.list.map((item,index)=>{
            return <TodoItem delte={this.handleDetele.bind(this)} content={item} key={index} index={index} />
            //return <li key={index} onClick={this.handleItemclick.bind(this,index)}>{item}</li>
            })
          }
        </ul>
      </>
    )
  }
}
```

```
// TodoItem.js文件
import React, { Component } from 'react'
export default class TodoItem extends Component {
    //子组件如果想和父组件通信,子组件要调用父组件传递过来的方法
    handleDelete(){
        this.props.delte(this.props.index)
    }
    render() {
        return (
            <div onClick={this.handleDelete.bind(this)}>
                {this.props.content}
            </div>
        )
    }
}
```

## 在继承类里可以使用state

~~~ aa
constructor (){
	super()
	this.state ={
		isLiked:false
	}
}
//修改isLiked的数据要用下面的方法handleLikedClick只是一个函数
    handleLikedClick=()=>{
        //使用这种方式修改数据在react里是不允许的,能修改数据,但是界面不会重新渲染
        //this.state.isLiked = !this.state.isLiked
        //要修改数据,就使用setState的方法
        //第一个参数又有两种情况,第一种情况是一个对象
        this.setState({
            isLiked: !this.state.isLiked
        })
        //第二种情况是一个方法prevState是上一次的state
        this.setState((prevState)=>{
            return {
                isLiked:!prevState.isLiked
            }
        },()=>{
            //由于setState是异步的,乳沟想要获取到最新的state,应该在这个回调里来获取
            console.log(this.state.isLiked)
        })
    }
~~~

## 可以使用props

	* 这是可以进行组件的数据传输
	* 上面的组件通信里有

## 做组件化目录的两种方法

​	* 在components目录里添加一个index.js文件这就是进入各个组件目录的入口

~~~
// import TodoHeader from './TodoHeader'
// import TodoInput from './TodoInput'
// import TodoList from './TodoList'

// export {
//     TodoHeader,
//     TodoInput,
//     TodoList
// }


export { default as TodoHeader } from "./TodoHeader"
export { default as TodoInput } from "./TodoInput"
export { default as TodoList } from "./TodoList"
export { dieault as Like } from "./Like"
~~~

## 生命周期

```
import React, { Component } from 'react'
export default class App extends Component {
  constructor(){
    super()
    this.state=({
      list:'aaa'
    })
  }
  componentWillMount(){
    //will 先执行但是不一定先执行完毕
    console.log('我即将挂载')
  }
  componentDidMount(){
    //进行ajxa操作获取后台数据
    console.log('我再render之后')
  }
  click(){
    this.setState({
      list:'bbb'
    })
    console.log('我是更改的render')
  }
  componentWillUpdate(){
    console.log('我即将更改')
  }
  componentDidUpdate(){
    console.log('我更改完毕')
  }
  
  render() {
    return (
      <div>
        <h1>{this.state.list}</h1>
        <button onClick={this.click.bind(this)} >add</button>
        <List />
      </div>
    )
  }
}
class List extends Component {
  //上一个props和下一个props
  componentWillReceiveProps(nextProps){
    console.log(this.props)
    console.log(nextProps)
  }
  render() {
    return (
      <div>
      </div>
    )
  }
}

```

### 事件的绑定与解除

~~~
window.addEventListener('click',this.handliClick)//绑定事件
window.removeEventListener('click',this.handliClick)//解除绑定
~~~

## 使用ajax安装配件

~~~
npm install axios --save
ajax的使用方法
import axios from 'axios'
    componentDidMount(){
        const promise = axios.get('http://www.dell-lee.com/react/api/demo.json')
        //请求成功后会触发then()函数方法会有一个返回值res，返回值就是ajax的数据返回值
        promise.then((res)=>{
            console.log(res)
        })
    }
fetch函数的ajax
fetch(url).then(response=>{
	return response.json()
}).then(data=>{
	console.log(date)
}).catch(e=>{
	console.log(e)
})
不懂的.不会,看不懂
import axios from 'axios'

const isDev = process.env.NODE_ENV === 'development'

const service = axios.create({
    baseURL:isDev ? 'http://rap2api.taobao.org/app/mock/176929' : ''
})
console.log(service)
service.interceptors.request.use((config)=>{
    console.log(config)
    config.data = Object.assign({},config.data,{
        // authToken:window.localStorage.getItem('authToken')
        authToken: 'itisatokenplaceholder'
    })
    return config
})
service.interceptors.response.use((resp)=>{
    if(resp.data.code ===200){
        return resp.data.data
    } else {
        //全局处理错误
        console.log('bug')
    }
})
~~~

## react1.6新增特性

~~~
// React Hooks 是react 16.8新增的一项特性
//它可以让你在不编写class的情况下使用state以及其他react特性
//两个常见的api，就是useState和useEffect，需要先引入
import React,{useState,useEffect} from 'react';
import {render} from 'react-dom';
const Counter = () => {
    // console.log(useState())
    //useState是一个方法，这个方法的参数就是默认值。结果是一个数组，数组的第一个就是初始值state，第二个就相当于setState
    //解构出来两个数组中的两个值
    const [count,setCount] = useState(0)
    //useEffect的参数是一个回调，不管是组件挂载还是更新，都会触发这个回调方法，类似于componentDidMount和componentDidUpdate的结合
    useEffect(()=>{
        console.log('渲染了')
        document.title=`当前的数量为${count}`
    })

    return(
        <div>
            {/* 这里的setCount就是useState所生成的方法（第二个）。注意个setState不一样的地方在于参数，这里的参数就是一个新值即可 */}
            <button onClick={()=>{setCount(count-1)}}>-</button>
            {/* 这里就是useState创建的值 */}
            <span>{count}</span>
            <button onClick={()=>{setCount(count+1)}}>+</button>

        </div>
    )
}
render(
    <Counter />,
    document.querySelector('#root')
)

~~~

## 非父子组件之间的传值

~~~
// createContext是react提供的一个用于跨组件传值的方法
import React,{Component , createContext} from 'react';
import {render} from 'react-dom';
// createContext这个方法的结果是一个对象，里面有两个组件：Provider和Consumer
// Provider用于提供状态
// Consumer用于接收状态
const {
    Provider,
    Consumer:CounterConsumer//解构出来重新赋值给一个CounterConsumer的组件
}=createContext()
//封装一个基本的Provider，因为直接使用Provider，不方便管理状态
class CounterProvider extends Component{
    constructor(){
        super()
        //这里的状态就是共享的，任何CounProvider的后代组件都可以通过CounterConsumer来接收这个值
        this.state={
            count:100
        }
    }
    //这里的方法也会继续通过Provider共享下去
    incrementCount = ()=>{
        this.setState({
            count:this.state.count+1
        })
    }
    decrementCount = ()=>{
        this.setState({
            count:this.state.count-1
        })
    }
    render(){
        return(
            //使用Provider这个组件，他必须要有一个value值，这个value里可以传递任何的数据，一般还是传递一个对象比较合适
            <Provider value={{
                count:this.state.count,
                onIncrementCount:this.incrementCount,
                onDecrementCount:this.decrementCount,
            }}>
                {this.props.children}
            </Provider>
        )
    }
}
// 定义一个Counter组件
class Counter extends Component{
    render(){
        return(
            //使用CounterConsumer来接收count，
            <CounterConsumer>
                {
                    // 注意！！Consumer的children必须是一个方法，这个方法有一个参数，这个参数就是Provider的value
                    ({count})=>{
                        return(
                            <span>{count}</span>
                        )
                    }
                }
            </CounterConsumer>
        )
    }
}
class CountBtn extends Component{
    render(){
        return(
            <CounterConsumer>
                {
                    ({onIncrementCount,onDecrementCount})=>{
                        const handler = this.props.type==='increment'?onIncrementCount:onDecrementCount
                        return <button onClick={handler}>{this.props.children}</button>
                    } 
                }
            </CounterConsumer>
        )
    }
}
class App extends Component{
    render(){
        return (
            <>
                <CountBtn type="decrement">-</CountBtn>
                <Counter />
                <CountBtn type="increment">+</CountBtn>
            </>
        )
    }
}
render(
    <CounterProvider>
    <App />
    </CounterProvider>,
    document.querySelector('#root')
)

~~~

## HOC及CRA中装饰器

~~~
让cra支持@装饰器写法
1. 不管你是要配置什么，我们最好的方式使用react-app-rewired这个包对cra创建的项目进行轻微的配置调整
2. 安装好之后，在package.json里把react-scripts替换成react-app-rewired
3. 在根目录下创建一个config-overrides.js
	module。exports = (config)=>{
	//在这里去做配置
		return config
	}
4. 当然如果想要配置方便，可以在安装customize-cra，然后把config-overrides.js改成这样
	const { overide,addDecoratorsLegacy } =require('customize-cra')
	module.exports = override(
		addDecoratorsLegacy()
	)
~~~

## redux

~~~
安装 npm i redux -S
createStore()
1.作用：创建包含指定reducer的store对象
2.编码:
		import {createStore} from 'redux'
		import counter from './reducer/counter'
		const store = createStore(counter)
		//可以让store关联到counter
二.store对象
1.作用：redux库最核心的管理对象
2.它内部维护着：state reducer
3.核心方法：
		getState() 得到state
		dispatch(action) 分发action，触发reducer调用，产生新的state
		subscribe(listener) 注册监听，当产生了新的state是，自动调用
4个文件的使用*********************************************
*********************************************************
store从reducers.js中获取初始值，通过index.js传给app.js当app的点击事件通过this.props.store.dispath()传给actions.js的方法并带有参数。将参数和（type:action-type.js的常量字符串）作为actions.js方法的返回值传参并且触发reducers.js分发给reducers.js的action，产生新的counter的传给store,然后index.js用store.subscribe(render)监听render()的DOM渲染
(1)action-type.js
	// 包含所有action type的常量字符串
	export const INCREMENT = 'INCREMENT'
	export const DECREMENT = 'DECREMENT'
(2)actions.js
	//使用action-type.js里的常量字符
	import {INCREMENT,DECREMENT} from '../redux/action-type'
	export const increment = (number) =>({type:INCREMENT,data:number})
	export const decrement = (number) =>({type:DECREMENT,data:number})
(3)reducers.js
	import {INCREMENT,DECREMENT} from './action-type'
	export function counter(state=0,action){
    	console.log('counter',state,action)
    	switch (action.type){
	        case INCREMENT:
            	return state + action.data
        	case DECREMENT:
    	        return state - action.data
	        default:
        	    return state
    	}
	}
(4)store.js
	import { createStore } from 'redux'
	import {counter} from './reducers'
	// 生成一个store对象
	const store = createStore(counter)
	console.log(store)
	export default store
~~~

## react-redux

 1. 安装

    ~~~
    安装 npm install --save react-redux
    注意安装react-redux必须要安装redux，
    ~~~

 2. react-redux将所有组件分成两大类

    - UI组件
      - 只负责UI的呈现，不带有任何的业务逻辑通过props接收数据（一般数据和函数）不使用任何的Redux的API一般保存在component文件夹下
    - 容器组件
      - 负责管理数据和业务逻辑，不负责UI的呈现使用Redux的API一般保存在containers文件夹下

	3. 相关API

    - Provider

      - 让所有组件都可以得到state数据在index.js 文件下对App进行包裹监听就不需要store.subscribe()来监听了并且还帮App将store传过去

      - ~~~
        <Provider store={store}>
        	<App />
        </Provider>
        ~~~

    - connect()

      - 用于包装UI组件生成容器组件用这个高级函数来暴露

      - ~~~
        import {connect} from 'react-redux'
        connect(
        	mapStateToprops,
        	mapDispatchToProps
        )(Counter)
        
        ~~~

      - ~~~
        import {connect} from 'react-redux' 在App里
        connect()()是react连接redux的,并且不能直接用export default App来暴露App了要换成connect()(App)的高级函数
        ~~~

	4. 异步操作

    - 安装 下载redux的插件（异步中间件）安装 npm install --save redux-thunk

      - ~~~
        然后要在store的redux组件中解构applyMiddleware这个函数并且把thunk作为参数，放到createStore()这个函数中去，然后App.js的connect()()这个高级组件就可以传异步的方法
        App.js
        import {connect} from 'react-redux'
        export default connect(
            state=>({count:state}),
            {increment:increment,
            decrement:decrement,incrementAsync:incrementAsync}
        )(App);
        **异步和同步的方法要和action.js里的方法名一样方便使用
        如果使用点击事件触发的方法就要到action.js里声明这个方法，并且还要在connect()()里附给点击事件触发的方法
        action.js
        import {INCREMENT,DECREMENT} from './action-type'
        export const increment = (number) =>({type:INCREMENT,data:number})
        export const decrement = (number) =>({type:DECREMENT,data:number})
        export const incrementAsync = (number) => {
            return dispatch=>{
                setTimeout(()=>{
                    dispatch(increment(number))
                },1000)
            }
        }
        **记住异步的方法一定return一个方法才行，同步的话可以返回一个对象
        **更严谨的话要使用prop-types来定义其他组件传过来的类型（函数func，字符串string，等）
        import PropTypes from 'prop-types'
        constructor(){
            super()
            this.state={
                count:0,
                increment:PropTypes.func.isRequired,
                decrement:PropTypes.func.isRequired,
                incrementAsync:PropTypes.func.isRequired
            }
            
        }
        ~~~

        

## 可以使用Ant Design布局界面

~~~
安装antd       npm install antd -S
再安装一个antd的插件 npm i babel-plugin-import
在app文件使用的话就可以引用import {Button} from 'antd'
在index.js文件引入import 'antd/dist/antd.css';
import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import 'antd/dist/antd.css';
//中文配置
import zhCN from 'antd/es/locale/zh_CN';
//改成全局
import { ConfigProvider } from 'antd'

ReactDOM.render(
    <ConfigProvider locale={zhCN}>
        <App locale={zhCN} /> ,
    </ConfigProvider>,
    document.getElementById('root')
);

~~~

## 路由

~~~
安装 npm install react-router-dom --save


1.两种导入模式,Route是渲染页面不然this.props没参数
import { BrowserRouter as Router,Route } from 'react-router-dom'
import { HashRouter as Routre,Route } from 'react-router-dom'
render(
	//这层包裹只需要一次
    <Router>


2.Route是渲染在App的子页面里只需import {Route}就可以正常使用，path是http访问路径记得加'/'，当path的访问路径出现路径嵌套的话就要加上exact这个属性，exact这个属性管访问的时候先访问谁所以要记得加上Switch判断组件{Route,NavLink as Link，Redirect,Switch}进行判断
    	<Route component={App} path='App' />
    </Router>,
    document.querySelector('#root')
)


3.如果想要页面点击就跳转就要引入Link    ,to是要点击跳转的路径就是一个a标签


4.也可以用NavLink 引入的时候改成{Route,NavLink as Link}这样的话就会带一个class
import { Route ,Link} from 'react-router-dom'
<ul>
	<li><Link to="/home">首页</Link></li>
    <li><Link to="/artical">文章</Link></li>
    <li><Link to="/users">用户</Link></li>
</ul>


5.如果想一开始就跳到首页就要引入{Route,NavLink as Link，Redirect}，to就是首页的路径from是要加的访问条件。如果报错的话就要加上Switch判断组件，引入这个组件，之后将所有的Route包裹起来
<Redirect to="/home" from="/" />


6.如果相传参数的话就要用这种方法,就可以把routeProps传过去了
<Route path="/users" render={(routeProps)=>{
	return this.state.islogin?<Users {...routeProps} />:<div>请登录</div>
}} />


7.在一个组件里用到跳转路由的话就要用到withRouter这个高级组件，先在组件里引入{withRouter}
import React, { Component } from 'react'
import {withRouter} from 'react-router-dom'
class BackHome extends Component {
    goHome=()=>{
        //不传参数用这个
        this.props.history.push('/home')
        // 传参数用这个
        // this.props.history.push({
        //     pathname:'/home',
        //     state:{
        //         id:this.props.match.params.id
        //     }
        // })
    }
    render() {
        return (
            <div>
                <button onClick={this.goHome}>返回首页</button>
            </div>
        )
    }
}
//高级组件用这种方法调用
export default withRouter(BackHome)

~~~

### js时间戳库 moment

	- 安装 npm i moment -S
	- 用法moment(createAt).format('YYYY年MM月DD日 HH:mm:ss')

​	

## 实战应用环境安装

1. cnpm i react-app-rewired customize-cra -D     如果报错安装react-scripts

2. 在主目录下新建config-overrides.js文件还要将package.json文件的scripts改成react-app-rewired

   ~~~
   配置文件//基于customzie和react-app-rewired的定制配置文件
   //从customize-cra引入一些相关的方法
   const { override } = require('customize-cra');
   module.exports = override()
   ~~~

3. 安装css预编辑器less

   cnpm i less less-loader -D

   - 在config-overrides.js文件继续配置

   ~~~
   const { 
       override,
       addLessLoader
   } = require('customize-cra');
   
   module.exports = override(
       addLessLoader({
           javacsriptEnabled:true
       })
   ) 
   ~~~

4. 安装Antd

   cnpm install antd -S

   cnpm i babel-plugin-import 这是antd的插件

   - 在config-overrides.js文件继续配置

   ~~~
   const { 
       override,
       addLessLoader,
       fixBabelImports
   } = require('customize-cra');
   module.exports = override(
       addLessLoader({
           javacsriptEnabled:true
       }),
       fixBabelImports('import',{
           libraryName:"antd",
           libraryDirectoryes:"es",
           style:'css' // `style: true` 会加载 less 文件        
      })
   ) 
   ~~~

   - 如果要改变antd的主题的话就要在主目录下创建一个lessVars.js文件

     ~~~
     module.exports = {
         "@primary-color":" #1890ff", // 全局主色
         "@link-color":" #1890ff", // 链接色
         "@success-color":" #52c41a", // 成功色
         "@warning-color":" #faad14", // 警告色
         "@error-color":" #f5222d", // 错误色
         "@font-size-base":" 14px", // 主字号
         "@heading-color":" rgba(0, 0, 0, 0.85)", // 标题色
         "@text-color":" rgba(0, 0, 0, 0.65)", // 主文本色
         "@text-color-secondary":" rgba(0, 0, 0, 0.45)", // 次文本色
         "@disabled-color":" rgba(0, 0, 0, 0.25)", // 失效色
         "@border-radius-base":" 4px", // 组件/浮层圆角
         "@border-color-base":" #d9d9d9", // 边框色
         "@box-shadow-base":" 0 2px 8px rgba(0, 0, 0, 0.15)", // 浮层阴影
     }
     然后还要在config-overrides.js文件中引入const modifyVars = require('./lessVars')
     放在addLessLoader里面
     ~~~

5. 安装redux
   
   - 安装上面的react-redux就可以了
   
6. 如果要导出文件安装Xlsx

   - cnpm i xlsx

   - ~~~
     只是导出文件的时候用
     /* convert state to workbook */
     		const ws = XLSX.utils.aoa_to_sheet(this.state.data);
     		const wb = XLSX.utils.book_new();
     		XLSX.utils.book_append_sheet(wb, ws, "SheetJS");
     		/* generate XLSX file and send to client */
     		XLSX.writeFile(wb, "sheetjs.xlsx")
     ~~~


7. wangEditor3的安装

   1. npm install wangeditor

   2. 使用.(可以让div变换成一个输入框,一般用在内容编辑页面)

      ~~~
      import E from 'wangeditor'
      var E = window.wangEditor
      var editor2 = new E('#div1')
      editor2.create()
      要用ref来获取div的DOM,用ref就要引入createRef,ref={this.editorRef},在constructor(){this.editorRef = createRef()} 在E()的时候记得加current
      ~~~

      