1.（1）用getElementById().value将URL赋值给一个字符串变量
  （2）用.indexOf()获得name=和&在字符串中的位置m,n
  （3）用.substring()获得name变量的变量值
  （4）用getElementById().value= 把获得的变量值输出到对应ID的text中
2.（1）setInterval(function,5000)设定每五秒执行一次function函数
  （2）在执行的函数中先设定2个变量m,n，分别存储执行的次数和当前的时间（new Date()）
  （3）if```else```循环，m>=10||n%60==0时，执行clearInterval(),终止计时器，否则getElementById().value=2^n;将值输出
3.（1）getElementById().value读取输入的字符串
  （2）.length读取字符串的长度，并新建一个空数组str
  （3）for循环嵌套if,else循环，若str中有字符串中的某个字母，则在str中的值加一，否则等于一
  （4）遍历str数组，找出出现最多的次数
  （5）再次遍历str数组，找出出现次数最多对应的字符
  （6）输出
  