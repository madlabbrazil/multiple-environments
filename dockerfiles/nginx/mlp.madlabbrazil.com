server {
    listen       80;
    server_name  mlp.madlabbrazil.com;

    add_header X-Powered-By "Mad Lab Brazil";

    root   /www;
    index index.php index.html index.htm;
    location / {
      try_files $uri $uri/ /index.php?$args;
    }

    #include
}