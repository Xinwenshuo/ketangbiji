# jQuery

## jquery 安装
* 引入文件 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
## jqyery 语法
* $(this).hide();隐藏当前元素
* $(document).ready(function){		}开头必备语句
* $(fcuntion{		})同上(效果相同)
## 元素选择器
* $('button').click(function(){		})选择整个标签
* $('#test').click(function(){		})id选择器
* $('.test').click(function(){		})class 选择器
## 事件
* click()	单击事件
* dbclick()		双击事件
* mouseenter() 		移入
* mouseleace()		移出
* mousedown()		按下
* mouseup()		松开
* hover()		悬停
* focus()		获取焦点
* blur()		失去焦点

##	效果
* .show()		 显示
* .hide()		隐藏
* .toggle()		隐藏/显示
* .fadeln()		淡入(参数:时间3000);
* .fadeOut()		淡出
* .fadeToggle()		淡入/淡出
* .fadeTo()		渐变透明(参数:0-1);
* .slideDown()		向下滑动(参数:时间3000);
* .slideUp()		向上滑动(参数:时间3000);
* .slideToggle()		向上/向下滑动(参数:时间3000);
* .animate()		动画(参数:{left:'250px'},3000,执行完动画需要执行的函数名);
* .stop()		动画效果停止;
## HTML
* .append()		结尾添加标签
* .prepend()		在开头添加标签
* .after()		在被选的元素之后添加标签
* .before()		在被选的元素之前添加标签

# ajax
```
$.ajax({
                url:'tianjia.php',
                type:'get',
                data:$('#form').serialize(),
                async:true,
                success:function(data){
                    if(data == 1){
                        alert('添加成功');
                        $('#div').append("<h2 class='h2'>用户名："+$('#name').val()+"</h2>"+"<p class='p'>留言内容："+$("#neirong").val()+"</p>");
                        $('#neirong').val('');
                    }else{
                        alert("添加失败");
                    }
                }
            })
```
```
$.ajax({
        url:'select.php',
        type:'post',
        dataType:'json',
        data:'',
        success:function(deta){
            // console.log(deta);
            // alert(deta)
            $.each(deta,function(key,value){
                console.log(value);
                $('#div').append("<h2 class='h2'>用户名："+value['name']+"</h2>"+"<p class='p'>留言内容："+value['content']+"<p>");
            })
        }
    })
```
## 与数据库的连接PHP
1. 添加;
```
    $user = $_GET['user'];
    $content = $_GET['content'];
    $mysql = "mysql:host=localhost;dbname=wenzhang;charset=utf8";
    try{
        $pdo = new PDO($mysql,'root','lixinyan');
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $pdo->setAttribute(3,1);
    $sql = "INSERT INTO wenzhang1 (name, content) VALUES ('{$user}','{$content}')";

    $a = $pdo->exec($sql);
    echo ($a);
```
2. 查看;
```
    $mysql = "mysql:host=localhost;dbname=wenzhang;charset=utf8";
    try{
        $pdo = new PDO($mysql,'root','lixinyan');
    }catch(PDOExecption $e){
        echo $e->getMessage();
    }
    $pdo->setAttribute(3,1);
    $sql = 'select * from wenzhang1';
    $bool = $pdo->prepare($sql);
    $bool->execute();
    $a = $bool->setFetchMode(PDO::FETCH_ASSOC);
    foreach($bool->fetchAll() as $k=>$v){
        $array[] = $v;

    }
    //转换json字符
    echo json_encode($array);
```