##使用Vundle管理vim插件

1. 获取Vundle
```
git clone https://github.com/gmarik/Vundle.vim.git ~/.vim/bundle/Vundle.vim
```
2. 替换本机上的.vimrc
```
ln -s ~/git/my-config/vim/vimrc ~/.vimrc
```
3. 安装插件
```
vim
:PluginInstall
```

参考：https://github.com/VundleVim/Vundle.vim

// 使用macvim中的vim替换系统vim
alias vim='/Applications/MacVim.app/Contents/MacOS/Vim'
