import os,shutil
import sys
from PIL import Image
from resizeimage import resizeimage

name = sys.argv[1]

#name="coupon1.jpg"
os.chdir("coupons");
files = os.listdir()
for j in range(len(files)):
	if(files[j] == name):
		src = os.getcwd()+"/"+name
		break
os.chdir("..")
dst = os.getcwd()+"/docomo1.png"
shutil.move(src,dst)

with open(name, 'r+b') as f:
	with Image.open(f) as image:
		cover = resizeimage.resize_cover(image,[1012,289])
		cover.save('docomo1.png',image.format)
