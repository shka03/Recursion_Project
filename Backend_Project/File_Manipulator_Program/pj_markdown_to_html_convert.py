"""
Markdown to html convert

[本プログラムの説明]
マークダウンを HTML に変換するプログラムです。
markdown は実行するコマンド、inputfile は .md ファイルへのパス、出力パスはプログラムを実行した後に作成される .html です。

下記、コマンドのように入力をして実行します。
例：python3 pj_markdown_to_html_convert.py markdown inputfile outputfile

詳細は、各関数のコメントに記載してます。
"""
import markdown
import os
import sys


def markdown_to_html_convert(input_path, ouput_file):
    with open(input_path, 'r', encoding="utf-8") as input_f:
        contents = input_f.read()

    html = markdown.markdown(contents)
    
    with open(ouput_file, 'w', encoding="utf-8") as output_f:
        output_f.write(html)


def main(argv):
    if len(sys.argv) < 4:
        sys.exit('引数が足りておりません。再確認して実行してください。')
    else:
        input_path = os.path.abspath(argv[2])
        output_file = argv[3]
        markdown_to_html_convert(input_path, output_file)


if __name__ == '__main__':
    main(sys.argv)
