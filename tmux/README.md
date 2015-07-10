##安装tmux
osx系统
```bin
brew install tmux
```
ubuntu系统
```bin
sudo apt-get install tmux
```

##配置文件
启动加载
```bin
tmux -f /path/to/.tmux.conf
```
运行中加载
```bin
Ctrl-b :
source-file /path/to/.tmux.conf
```