# Node.js

## 安装
1. $ sudo npm install npm -g

## 基本语法
1. var fs = require('fs');	引入fs模块(文件);
2. //var data = fs.readFileSync('input.txt'); 查看文件//
```
回调函数
var fs = require('fs');
fs.readFile('input.txt',function(err,data){
    if(err) return console.error(err);
    console.log(data.toString());
})
console.log("程序结束!");
```
## 事件循环
1. Node.js 有多个内置的事件，我们可以通过引入 events 模块，并通过实例化 EventEmitter 类来绑定和监听事件，如下实例：
```
// 引入 events 模块
var events = require('events');
// 创建 eventEmitter 对象
var eventEmitter = new events.EventEmitter();
```
2. 以下程序绑定事件处理程序：
```
eventEmitter.on('client', msg);
```
3. 我们可以通过程序触发事件：
``` 
eventEmitter.emit('client',msg);
```

## 基本模块
```
global
在前面的JavaScript课程中，我们已经知道，JavaScript有且仅有一个全局对象，在浏览器中，叫window对象。而在Node.js环境中，也有唯一的全局对象，但不叫window，而叫global，这个对象的属性和方法也和浏览器环境的window不同。进入Node.js交互环境，可以直接输入：

> global.console
Console {
  log: [Function: bound ],
  info: [Function: bound ],
  warn: [Function: bound ],
  error: [Function: bound ],
  dir: [Function: bound ],
  time: [Function: bound ],
  timeEnd: [Function: bound ],
  trace: [Function: bound trace],
  assert: [Function: bound ],
  Console: [Function: Console] }
```

```
process
process也是Node.js提供的一个对象，它代表当前Node.js进程。通过process对象可以拿到许多有用信息：

> process === global.process;
true
> process.version;
'v5.2.0'
> process.platform;
'darwin'
> process.arch;
'x64'
> process.cwd(); //返回当前工作目录
'/Users/michael'
> process.chdir('/private/tmp'); // 切换当前工作目录
undefined
> process.cwd();
'/private/tmp'
```

```
文件
stat
如果我们要获取文件大小，创建时间等信息，可以使用fs.stat()，它返回一个Stat对象，能告诉我们文件或目录的详细信息：

'use strict';

var fs = require('fs');

fs.stat('sample.txt', function (err, stat) {
    if (err) {
        console.log(err);
    } else {
        // 是否是文件:
        console.log('isFile: ' + stat.isFile());
        // 是否是目录:
        console.log('isDirectory: ' + stat.isDirectory());
        if (stat.isFile()) {
            // 文件大小:
            console.log('size: ' + stat.size);
            // 创建时间, Date对象:
            console.log('birth time: ' + stat.birthtime);
            // 修改时间, Date对象:
            console.log('modified time: ' + stat.mtime);
        }
    }
});
```
***压缩文件***

```
var fs = require("fs");
var zlib = require('zlib');

// 压缩 input.txt 文件为 input.txt.gz
fs.createReadStream('input.txt')
  .pipe(zlib.createGzip())
  .pipe(fs.createWriteStream('input.txt.gz'));
  
console.log("文件压缩完成。");
```

***解压文件***

```
var fs = require("fs");
var zlib = require('zlib');

// 解压 input.txt.gz 文件为 input.txt
fs.createReadStream('input.txt.gz')
  .pipe(zlib.createGunzip())
  .pipe(fs.createWriteStream('input.txt'));
  
console.log("文件解压完成。");
```

***模块***

1. exports 接口 用于外部文件访问本文件函数的模块;只需调用文件就可以用;

   module.exports 可以直接调用本文件函数里的任何函数;
   
## htt模块
	1. 引入 const http = require('http');
	2. 实例化 http.createServer((req,res)=>{  });
	3. http监听 http.listen('3000',()=>{console.log=('开启服务')});

## 读取流
	1. 引入文件模块 const fs = require('fs');
	2. 读取文件 fs.readFile('./1.txt',(err,data){err是错误信息\data是读取的内容});
	3. 同步要加Syun在readFileSyun ;异步不需要加
## 写入流
	1. 引入文件模块 const fs = require('fs');
	2. 写入文件 fs.writeFile('./1.txt','需要写入的内容',(err){err是错误信息})
	3. 步要加Syun在writeFileSyun ;异步不需要加

## express 框架
	1. 引入 const express = require('express');
	2. 创建对象 app = express();
	3. 实例化 app.get('/',(req,res)=>{		});
	4. 监听 app.listen('3000',()=>{		});
	5. 文件读取 res.sendFile(__dirname+'/'+'1.html');
	6. 把文件目录推到服务器上app.use('/html',express.static('html'));
	7. 下载文件 npm install express

## socket.io
	1. 引入文件 cosnt ws = require('socket.io');
	2. 记得下载文件 npm install socket.io;
	3. 实例化挂载http的实例化 io = socket(server);
		* 把express的对象挂载到http上;server = http.createServer(app);
	4. 创建监听事件 io.on('connection',(socket)=>{
		通过频道监听文件 socket.on('client',(msg)={
				将监听到的msg通过频道广播出去 io.emit('client',msg);
				})；
			})；
	5. 在html里要引入io的js文件 https://cdn.bootcss.com/socket.io/2.1.1/socket.io.js
	6. 要用io连接端口 var socket = io.connect('http://localhost:3000');
	7. 在html里把要传进服务器的数据通过频道广播出去socket.emit('client',msg);
	8. 也可以在html里监听服务器传出来的数据 socket.on('client',(msg)=>{ 		});



