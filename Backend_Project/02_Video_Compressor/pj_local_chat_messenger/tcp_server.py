"""
Local Chat Messenger ver tcp/ip (Server)

[本プログラムの説明]
Clientのプログラムからメッセージを送信するとサーバーからメッセージが返答されます。
※サーバーからのメッセージは、Fakerを利用してます。
サーバーは常に動作しているため、強制終了が必要になります。
"""


import os
import socket

from faker import Factory


def is_file_exists(server_address):
    try:
        os.unlink(server_address)
    except FileNotFoundError:
        pass


def tcp_server(sock):
    while True:
        connection, client_address = sock.accept()
        
        try:           
            while True:
                data = connection.recv(16)
                data_str = data.decode("utf-8") if data.decode("utf-8") else "データなし。"
                print(f"受信したデータは {data_str}")
                
                if data:
                    fake = Factory.create()
                    response = fake.text(20)
                    connection.sendall(response.encode())
                else:
                    print(f"{client_address} データはありませんでした。")
                    break
        finally:
            print("クライアントとの接続を終了します。")
            connection.close()  


def main():
    sock = socket.socket(socket.AF_UNIX, socket.SOCK_STREAM)
    server_address = '/socket_file'
    
    is_file_exists(server_address)

    sock.bind(server_address)
    sock.listen(1)
    tcp_server(sock)


if __name__ == "__main__":
    main()
