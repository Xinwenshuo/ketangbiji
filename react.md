# react 笔记

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

2. react的cra

   安装cra环境npx create-react-app my-app

   打开目录cd my-app

   执行命令npm start



+ 学习

3. 创建组件的第一个方式

   在src目录的index.js文件写jsx

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

