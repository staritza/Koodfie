#!/usr/bin/python
#-*-coding:utf-8 -*-
import codecs
filesample = codecs.open('sampletext', encoding='utf-8').read()
x = u'abcdeɛfghijklmŋnopqrstuvwxyzɔ'
for i in x:
	print  i, ": ", filesample.count(i) 

