<?php
#--------------------------------------Convierte numeros a letras---------------------------
function numero_letra($numero)
{
$arreglo_numeros=[
'Cero',
'Uno',
'Dos',
'Tres',
'Cuatro',
'Cinco',
'Seis',
'Siete',
'Ocho',
'Nueve',
'Diez',
'Once',
'Doce',
'Trece',
'Catorce',
'Quince',
'Dieciseis',
'Diecisiete',
'Dieciocho',
'Diecinueve',
'Veinte',
'Veintiuno',
'Veintidos',
'Veintitres',
'Veinticuatro',
'Veinticinco',
'Veintiseis',
'Veintisiete',
'Veintiocho',
'Veintinueve',
'Treinta',
'Treinta Y Uno',
'Treinta Y Dos',
'Treinta Y Tres',
'Treinta Y Cuatro',
'Treinta Y Cinco',
'Treinta Y Seis',
'Treinta Y Siete',
'Treinta Y Ocho',
'Treinta Y Nueve',
'Cuarenta',
'Cuarenta Y Uno',
'Cuarenta Y Dos',
'Cuarenta Y Tres',
'Cuarenta Y Cuatro',
'Cuarenta Y Cinco',
'Cuarenta Y Seis',
'Cuarenta Y Siete',
'Cuarenta Y Ocho',
'Cuarenta Y Nueve',
'Cincuenta',
'Cincuenta Y Uno',
'Cincuenta Y Dos',
'Cincuenta Y Tres',
'Cincuenta Y Cuatro',
'Cincuenta Y Cinco',
'Cincuenta Y Seis',
'Cincuenta Y Siete',
'Cincuenta Y Ocho',
'Cincuenta Y Nueve',
'Sesenta',
'Sesenta Y Uno',
'Sesenta Y Dos',
'Sesenta Y Tres',
'Sesenta Y Cuatro',
'Sesenta Y Cinco',
'Sesenta Y Seis',
'Sesenta Y Siete',
'Sesenta Y Ocho',
'Sesenta Y Nueve',
'Setenta',
'Setenta Y Uno',
'Setenta Y Dos',
'Setenta Y Tres',
'Setenta Y Cuatro',
'Setenta Y Cinco',
'Setenta Y Seis',
'Setenta Y Siete',
'Setenta Y Ocho',
'Setenta Y Nueve',
'Ochenta',
'Ochenta Y Uno',
'Ochenta Y Dos',
'Ochenta Y Tres',
'Ochenta Y Cuatro',
'Ochenta Y Cinco',
'Ochenta Y Seis',
'Ochenta Y Siete',
'Ochenta Y Ocho',
'Ochenta Y Nueve',
'Noventa',
'Noventa Y Uno',
'Noventa Y Dos',
'Noventa Y Tres',
'Noventa Y Cuatro',
'Noventa Y Cinco',
'Noventa Y Seis',
'Noventa Y Siete',
'Noventa Y Ocho',
'Noventa Y Nueve',
'Cien',
'Ciento Uno',
'Ciento Dos',
'Ciento Tres',
'Ciento Cuatro',
'Ciento Cinco',
'Ciento Seis',
'Ciento Siete',
'Ciento Ocho',
'Ciento Nueve',
'Ciento Diez',
'Ciento Once',
'Ciento Doce',
'Ciento Trece',
'Ciento Catorce',
'Ciento Quince',
'Ciento Dieciséis',
'Ciento Diecisiete',
'Ciento Dieciocho',
'Ciento Diecinueve',
'Ciento Veinte',
'Ciento Veintiuno',
'Ciento Veintidós',
'Ciento Veintitrés',
'Ciento Veinticuatro',
'Ciento Veinticinco',
'Ciento Veintiséis',
'Ciento Veintisiete',
'Ciento Veintiocho',
'Ciento Veintinueve',
'Ciento Treinta',
'Ciento Treinta Y Uno',
'Ciento Treinta Y Dos',
'Ciento Treinta Y Tres',
'Ciento Treinta Y Cuatro',
'Ciento Treinta Y Cinco',
'Ciento Treinta Y Seis',
'Ciento Treinta Y Siete',
'Ciento Treinta Y Ocho',
'Ciento Treinta Y Nueve',
'Ciento Cuarenta',
'Ciento Cuarenta Y Uno',
'Ciento Cuarenta Y Dos',
'Ciento Cuarenta Y Tres',
'Ciento Cuarenta Y Cuatro',
'Ciento Cuarenta Y Cinco',
'Ciento Cuarenta Y Seis',
'Ciento Cuarenta Y Siete',
'Ciento Cuarenta Y Ocho',
'Ciento Cuarenta Y Nueve',
'Ciento Cincuenta',
'Ciento Cincuenta Y Uno',
'Ciento Cincuenta Y Dos',
'Ciento Cincuenta Y Tres',
'Ciento Cincuenta Y Cuatro',
'Ciento Cincuenta Y Cinco',
'Ciento Cincuenta Y Seis',
'Ciento Cincuenta Y Siete',
'Ciento Cincuenta Y Ocho',
'Ciento Cincuenta Y Nueve',
'Ciento Sesenta',
'Ciento Sesenta Y Uno',
'Ciento Sesenta Y Dos',
'Ciento Sesenta Y Tres',
'Ciento Sesenta Y Cuatro',
'Ciento Sesenta Y Cinco',
'Ciento Sesenta Y Seis',
'Ciento Sesenta Y Siete',
'Ciento Sesenta Y Ocho',
'Ciento Sesenta Y Nueve',
'Ciento Setenta',
'Ciento Setenta Y Uno',
'Ciento Setenta Y Dos',
'Ciento Setenta Y Tres',
'Ciento Setenta Y Cuatro',
'Ciento Setenta Y Cinco',
'Ciento Setenta Y Seis',
'Ciento Setenta Y Siete',
'Ciento Setenta Y Ocho',
'Ciento Setenta Y Nueve',
'Ciento Ochenta',
'Ciento Ochenta Y Uno',
'Ciento Ochenta Y Dos',
'Ciento Ochenta Y Tres',
'Ciento Ochenta Y Cuatro',
'Ciento Ochenta Y Cinco',
'Ciento Ochenta Y Seis',
'Ciento Ochenta Y Siete',
'Ciento Ochenta Y Ocho',
'Ciento Ochenta Y Nueve',
'Ciento Noventa',
'Ciento Noventa Y Uno',
'Ciento Noventa Y Dos',
'Ciento Noventa Y Tres',
'Ciento Noventa Y Cuatro',
'Ciento Noventa Y Cinco',
'Ciento Noventa Y Seis',
'Ciento Noventa Y Siete',
'Ciento Noventa Y Ocho',
'Ciento Noventa Y Nueve',
'Doscientos',
'Doscientos Uno',
'Doscientos Dos',
'Doscientos Tres',
'Doscientos Cuatro',
'Doscientos Cinco',
'Doscientos Seis',
'Doscientos Siete',
'Doscientos Ocho',
'Doscientos Nueve',
'Doscientos Diez',
'Doscientos Once',
'Doscientos Doce',
'Doscientos Trece',
'Doscientos Catorce',
'Doscientos Quince',
'Doscientos Dieciséis',
'Doscientos Diecisiete',
'Doscientos Dieciocho',
'Doscientos Diecinueve',
'Doscientos Veinte',
'Doscientos Veintiuno',
'Doscientos Veintidós',
'Doscientos Veintitrés',
'Doscientos Veinticuatro',
'Doscientos Veinticinco',
'Doscientos Veintiséis',
'Doscientos Veintisiete',
'Doscientos Veintiocho',
'Doscientos Veintinueve',
'Doscientos Treinta',
'Doscientos Treinta Y Uno',
'Doscientos Treinta Y Dos',
'Doscientos Treinta Y Tres',
'Doscientos Treinta Y Cuatro',
'Doscientos Treinta Y Cinco',
'Doscientos Treinta Y Seis',
'Doscientos Treinta Y Siete',
'Doscientos Treinta Y Ocho',
'Doscientos Treinta Y Nueve',
'Doscientos Cuarenta',
'Doscientos Cuarenta Y Uno',
'Doscientos Cuarenta Y Dos',
'Doscientos Cuarenta Y Tres',
'Doscientos Cuarenta Y Cuatro',
'Doscientos Cuarenta Y Cinco',
'Doscientos Cuarenta Y Seis',
'Doscientos Cuarenta Y Siete',
'Doscientos Cuarenta Y Ocho',
'Doscientos Cuarenta Y Nueve',
'Doscientos Cincuenta',
'Doscientos Cincuenta Y Uno',
'Doscientos Cincuenta Y Dos',
'Doscientos Cincuenta Y Tres',
'Doscientos Cincuenta Y Cuatro',
'Doscientos Cincuenta Y Cinco',
'Doscientos Cincuenta Y Seis',
'Doscientos Cincuenta Y Siete',
'Doscientos Cincuenta Y Ocho',
'Doscientos Cincuenta Y Nueve',
'Doscientos Sesenta',
'Doscientos Sesenta Y Uno',
'Doscientos Sesenta Y Dos',
'Doscientos Sesenta Y Tres',
'Doscientos Sesenta Y Cuatro',
'Doscientos Sesenta Y Cinco',
'Doscientos Sesenta Y Seis',
'Doscientos Sesenta Y Siete',
'Doscientos Sesenta Y Ocho',
'Doscientos Sesenta Y Nueve',
'Doscientos Setenta',
'Doscientos Setenta Y Uno',
'Doscientos Setenta Y Dos',
'Doscientos Setenta Y Tres',
'Doscientos Setenta Y Cuatro',
'Doscientos Setenta Y Cinco',
'Doscientos Setenta Y Seis',
'Doscientos Setenta Y Siete',
'Doscientos Setenta Y Ocho',
'Doscientos Setenta Y Nueve',
'Doscientos Ochenta',
'Doscientos Ochenta Y Uno',
'Doscientos Ochenta Y Dos',
'Doscientos Ochenta Y Tres',
'Doscientos Ochenta Y Cuatro',
'Doscientos Ochenta Y Cinco',
'Doscientos Ochenta Y Seis',
'Doscientos Ochenta Y Siete',
'Doscientos Ochenta Y Ocho',
'Doscientos Ochenta Y Nueve',
'Doscientos Noventa',
'Doscientos Noventa Y Uno',
'Doscientos Noventa Y Dos',
'Doscientos Noventa Y Tres',
'Doscientos Noventa Y Cuatro',
'Doscientos Noventa Y Cinco',
'Doscientos Noventa Y Seis',
'Doscientos Noventa Y Siete',
'Doscientos Noventa Y Ocho',
'Doscientos Noventa Y Nueve',
'Trescientos',
'Trescientos Uno',
'Trescientos Dos',
'Trescientos Tres',
'Trescientos Cuatro',
'Trescientos Cinco',
'Trescientos Seis',
'Trescientos Siete',
'Trescientos Ocho',
'Trescientos Nueve',
'Trescientos Diez',
'Trescientos Once',
'Trescientos Doce',
'Trescientos Trece',
'Trescientos Catorce',
'Trescientos Quince',
'Trescientos Dieciséis',
'Trescientos Diecisiete',
'Trescientos Dieciocho',
'Trescientos Diecinueve',
'Trescientos Veinte',
'Trescientos Veintiuno',
'Trescientos Veintidós',
'Trescientos Veintitrés',
'Trescientos Veinticuatro',
'Trescientos Veinticinco',
'Trescientos Veintiséis',
'Trescientos Veintisiete',
'Trescientos Veintiocho',
'Trescientos Veintinueve',
'Trescientos Treinta',
'Trescientos Treinta Y Uno',
'Trescientos Treinta Y Dos',
'Trescientos Treinta Y Tres',
'Trescientos Treinta Y Cuatro',
'Trescientos Treinta Y Cinco',
'Trescientos Treinta Y Seis',
'Trescientos Treinta Y Siete',
'Trescientos Treinta Y Ocho',
'Trescientos Treinta Y Nueve',
'Trescientos Cuarenta',
'Trescientos Cuarenta Y Uno',
'Trescientos Cuarenta Y Dos',
'Trescientos Cuarenta Y Tres',
'Trescientos Cuarenta Y Cuatro',
'Trescientos Cuarenta Y Cinco',
'Trescientos Cuarenta Y Seis',
'Trescientos Cuarenta Y Siete',
'Trescientos Cuarenta Y Ocho',
'Trescientos Cuarenta Y Nueve',
'Trescientos Cincuenta',
'Trescientos Cincuenta Y Uno',
'Trescientos Cincuenta Y Dos',
'Trescientos Cincuenta Y Tres',
'Trescientos Cincuenta Y Cuatro',
'Trescientos Cincuenta Y Cinco',
'Trescientos Cincuenta Y Seis',
'Trescientos Cincuenta Y Siete',
'Trescientos Cincuenta Y Ocho',
'Trescientos Cincuenta Y Nueve',
'Trescientos Sesenta',
'Trescientos Sesenta Y Uno',
'Trescientos Sesenta Y Dos',
'Trescientos Sesenta Y Tres',
'Trescientos Sesenta Y Cuatro',
'Trescientos Sesenta Y Cinco',
'Trescientos Sesenta Y Seis',
'Trescientos Sesenta Y Siete',
'Trescientos Sesenta Y Ocho',
'Trescientos Sesenta Y Nueve',
'Trescientos Setenta',
'Trescientos Setenta Y Uno',
'Trescientos Setenta Y Dos',
'Trescientos Setenta Y Tres',
'Trescientos Setenta Y Cuatro',
'Trescientos Setenta Y Cinco',
'Trescientos Setenta Y Seis',
'Trescientos Setenta Y Siete',
'Trescientos Setenta Y Ocho',
'Trescientos Setenta Y Nueve',
'Trescientos Ochenta',
'Trescientos Ochenta Y Uno',
'Trescientos Ochenta Y Dos',
'Trescientos Ochenta Y Tres',
'Trescientos Ochenta Y Cuatro',
'Trescientos Ochenta Y Cinco',
'Trescientos Ochenta Y Seis',
'Trescientos Ochenta Y Siete',
'Trescientos Ochenta Y Ocho',
'Trescientos Ochenta Y Nueve',
'Trescientos Noventa',
'Trescientos Noventa Y Uno',
'Trescientos Noventa Y Dos',
'Trescientos Noventa Y Tres',
'Trescientos Noventa Y Cuatro',
'Trescientos Noventa Y Cinco',
'Trescientos Noventa Y Seis',
'Trescientos Noventa Y Siete',
'Trescientos Noventa Y Ocho',
'Trescientos Noventa Y Nueve',
'Cuatrocientos',
'Cuatrocientos Uno',
'Cuatrocientos Dos',
'Cuatrocientos Tres',
'Cuatrocientos Cuatro',
'Cuatrocientos Cinco',
'Cuatrocientos Seis',
'Cuatrocientos Siete',
'Cuatrocientos Ocho',
'Cuatrocientos Nueve',
'Cuatrocientos Diez',
'Cuatrocientos Once',
'Cuatrocientos Doce',
'Cuatrocientos Trece',
'Cuatrocientos Catorce',
'Cuatrocientos Quince',
'Cuatrocientos Dieciséis',
'Cuatrocientos Diecisiete',
'Cuatrocientos Dieciocho',
'Cuatrocientos Diecinueve',
'Cuatrocientos Veinte',
'Cuatrocientos Veintiuno',
'Cuatrocientos Veintidós',
'Cuatrocientos Veintitrés',
'Cuatrocientos Veinticuatro',
'Cuatrocientos Veinticinco',
'Cuatrocientos Veintiséis',
'Cuatrocientos Veintisiete',
'Cuatrocientos Veintiocho',
'Cuatrocientos Veintinueve',
'Cuatrocientos Treinta',
'Cuatrocientos Treinta Y Uno',
'Cuatrocientos Treinta Y Dos',
'Cuatrocientos Treinta Y Tres',
'Cuatrocientos Treinta Y Cuatro',
'Cuatrocientos Treinta Y Cinco',
'Cuatrocientos Treinta Y Seis',
'Cuatrocientos Treinta Y Siete',
'Cuatrocientos Treinta Y Ocho',
'Cuatrocientos Treinta Y Nueve',
'Cuatrocientos Cuarenta',
'Cuatrocientos Cuarenta Y Uno',
'Cuatrocientos Cuarenta Y Dos',
'Cuatrocientos Cuarenta Y Tres',
'Cuatrocientos Cuarenta Y Cuatro',
'Cuatrocientos Cuarenta Y Cinco',
'Cuatrocientos Cuarenta Y Seis',
'Cuatrocientos Cuarenta Y Siete',
'Cuatrocientos Cuarenta Y Ocho',
'Cuatrocientos Cuarenta Y Nueve',
'Cuatrocientos Cincuenta',
'Cuatrocientos Cincuenta Y Uno',
'Cuatrocientos Cincuenta Y Dos',
'Cuatrocientos Cincuenta Y Tres',
'Cuatrocientos Cincuenta Y Cuatro',
'Cuatrocientos Cincuenta Y Cinco',
'Cuatrocientos Cincuenta Y Seis',
'Cuatrocientos Cincuenta Y Siete',
'Cuatrocientos Cincuenta Y Ocho',
'Cuatrocientos Cincuenta Y Nueve',
'Cuatrocientos Sesenta',
'Cuatrocientos Sesenta Y Uno',
'Cuatrocientos Sesenta Y Dos',
'Cuatrocientos Sesenta Y Tres',
'Cuatrocientos Sesenta Y Cuatro',
'Cuatrocientos Sesenta Y Cinco',
'Cuatrocientos Sesenta Y Seis',
'Cuatrocientos Sesenta Y Siete',
'Cuatrocientos Sesenta Y Ocho',
'Cuatrocientos Sesenta Y Nueve',
'Cuatrocientos Setenta',
'Cuatrocientos Setenta Y Uno',
'Cuatrocientos Setenta Y Dos',
'Cuatrocientos Setenta Y Tres',
'Cuatrocientos Setenta Y Cuatro',
'Cuatrocientos Setenta Y Cinco',
'Cuatrocientos Setenta Y Seis',
'Cuatrocientos Setenta Y Siete',
'Cuatrocientos Setenta Y Ocho',
'Cuatrocientos Setenta Y Nueve',
'Cuatrocientos Ochenta',
'Cuatrocientos Ochenta Y Uno',
'Cuatrocientos Ochenta Y Dos',
'Cuatrocientos Ochenta Y Tres',
'Cuatrocientos Ochenta Y Cuatro',
'Cuatrocientos Ochenta Y Cinco',
'Cuatrocientos Ochenta Y Seis',
'Cuatrocientos Ochenta Y Siete',
'Cuatrocientos Ochenta Y Ocho',
'Cuatrocientos Ochenta Y Nueve',
'Cuatrocientos Noventa',
'Cuatrocientos Noventa Y Uno',
'Cuatrocientos Noventa Y Dos',
'Cuatrocientos Noventa Y Tres',
'Cuatrocientos Noventa Y Cuatro',
'Cuatrocientos Noventa Y Cinco',
'Cuatrocientos Noventa Y Seis',
'Cuatrocientos Noventa Y Siete',
'Cuatrocientos Noventa Y Ocho',
'Cuatrocientos Noventa Y Nueve',
'Quinientos',
'Quinientos Uno',
'Quinientos Dos',
'Quinientos Tres',
'Quinientos Cuatro',
'Quinientos Cinco',
'Quinientos Seis',
'Quinientos Siete',
'Quinientos Ocho',
'Quinientos Nueve',
'Quinientos Diez',
'Quinientos Once',
'Quinientos Doce',
'Quinientos Trece',
'Quinientos Catorce',
'Quinientos Quince',
'Quinientos Dieciséis',
'Quinientos Diecisiete',
'Quinientos Dieciocho',
'Quinientos Diecinueve',
'Quinientos Veinte',
'Quinientos Veintiuno',
'Quinientos Veintidós',
'Quinientos Veintitrés',
'Quinientos Veinticuatro',
'Quinientos Veinticinco',
'Quinientos Veintiséis',
'Quinientos Veintisiete',
'Quinientos Veintiocho',
'Quinientos Veintinueve',
'Quinientos Treinta',
'Quinientos Treinta Y Uno',
'Quinientos Treinta Y Dos',
'Quinientos Treinta Y Tres',
'Quinientos Treinta Y Cuatro',
'Quinientos Treinta Y Cinco',
'Quinientos Treinta Y Seis',
'Quinientos Treinta Y Siete',
'Quinientos Treinta Y Ocho',
'Quinientos Treinta Y Nueve',
'Quinientos Cuarenta',
'Quinientos Cuarenta Y Uno',
'Quinientos Cuarenta Y Dos',
'Quinientos Cuarenta Y Tres',
'Quinientos Cuarenta Y Cuatro',
'Quinientos Cuarenta Y Cinco',
'Quinientos Cuarenta Y Seis',
'Quinientos Cuarenta Y Siete',
'Quinientos Cuarenta Y Ocho',
'Quinientos Cuarenta Y Nueve',
'Quinientos Cincuenta',
'Quinientos Cincuenta Y Uno',
'Quinientos Cincuenta Y Dos',
'Quinientos Cincuenta Y Tres',
'Quinientos Cincuenta Y Cuatro',
'Quinientos Cincuenta Y Cinco',
'Quinientos Cincuenta Y Seis',
'Quinientos Cincuenta Y Siete',
'Quinientos Cincuenta Y Ocho',
'Quinientos Cincuenta Y Nueve',
'Quinientos Sesenta',
'Quinientos Sesenta Y Uno',
'Quinientos Sesenta Y Dos',
'Quinientos Sesenta Y Tres',
'Quinientos Sesenta Y Cuatro',
'Quinientos Sesenta Y Cinco',
'Quinientos Sesenta Y Seis',
'Quinientos Sesenta Y Siete',
'Quinientos Sesenta Y Ocho',
'Quinientos Sesenta Y Nueve',
'Quinientos Setenta',
'Quinientos Setenta Y Uno',
'Quinientos Setenta Y Dos',
'Quinientos Setenta Y Tres',
'Quinientos Setenta Y Cuatro',
'Quinientos Setenta Y Cinco',
'Quinientos Setenta Y Seis',
'Quinientos Setenta Y Siete',
'Quinientos Setenta Y Ocho',
'Quinientos Setenta Y Nueve',
'Quinientos Ochenta',
'Quinientos Ochenta Y Uno',
'Quinientos Ochenta Y Dos',
'Quinientos Ochenta Y Tres',
'Quinientos Ochenta Y Cuatro',
'Quinientos Ochenta Y Cinco',
'Quinientos Ochenta Y Seis',
'Quinientos Ochenta Y Siete',
'Quinientos Ochenta Y Ocho',
'Quinientos Ochenta Y Nueve',
'Quinientos Noventa',
'Quinientos Noventa Y Uno',
'Quinientos Noventa Y Dos',
'Quinientos Noventa Y Tres',
'Quinientos Noventa Y Cuatro',
'Quinientos Noventa Y Cinco',
'Quinientos Noventa Y Seis',
'Quinientos Noventa Y Siete',
'Quinientos Noventa Y Ocho',
'Quinientos Noventa Y Nueve',
'Seiscientos',
'Seiscientos Uno',
'Seiscientos Dos',
'Seiscientos Tres',
'Seiscientos Cuatro',
'Seiscientos Cinco',
'Seiscientos Seis',
'Seiscientos Siete',
'Seiscientos Ocho',
'Seiscientos Nueve',
'Seiscientos Diez',
'Seiscientos Once',
'Seiscientos Doce',
'Seiscientos Trece',
'Seiscientos Catorce',
'Seiscientos Quince',
'Seiscientos Dieciséis',
'Seiscientos Diecisiete',
'Seiscientos Dieciocho',
'Seiscientos Diecinueve',
'Seiscientos Veinte',
'Seiscientos Veintiuno',
'Seiscientos Veintidós',
'Seiscientos Veintitrés',
'Seiscientos Veinticuatro',
'Seiscientos Veinticinco',
'Seiscientos Veintiséis',
'Seiscientos Veintisiete',
'Seiscientos Veintiocho',
'Seiscientos Veintinueve',
'Seiscientos Treinta',
'Seiscientos Treinta Y Uno',
'Seiscientos Treinta Y Dos',
'Seiscientos Treinta Y Tres',
'Seiscientos Treinta Y Cuatro',
'Seiscientos Treinta Y Cinco',
'Seiscientos Treinta Y Seis',
'Seiscientos Treinta Y Siete',
'Seiscientos Treinta Y Ocho',
'Seiscientos Treinta Y Nueve',
'Seiscientos Cuarenta',
'Seiscientos Cuarenta Y Uno',
'Seiscientos Cuarenta Y Dos',
'Seiscientos Cuarenta Y Tres',
'Seiscientos Cuarenta Y Cuatro',
'Seiscientos Cuarenta Y Cinco',
'Seiscientos Cuarenta Y Seis',
'Seiscientos Cuarenta Y Siete',
'Seiscientos Cuarenta Y Ocho',
'Seiscientos Cuarenta Y Nueve',
'Seiscientos Cincuenta',
'Seiscientos Cincuenta Y Uno',
'Seiscientos Cincuenta Y Dos',
'Seiscientos Cincuenta Y Tres',
'Seiscientos Cincuenta Y Cuatro',
'Seiscientos Cincuenta Y Cinco',
'Seiscientos Cincuenta Y Seis',
'Seiscientos Cincuenta Y Siete',
'Seiscientos Cincuenta Y Ocho',
'Seiscientos Cincuenta Y Nueve',
'Seiscientos Sesenta',
'Seiscientos Sesenta Y Uno',
'Seiscientos Sesenta Y Dos',
'Seiscientos Sesenta Y Tres',
'Seiscientos Sesenta Y Cuatro',
'Seiscientos Sesenta Y Cinco',
'Seiscientos Sesenta Y Seis',
'Seiscientos Sesenta Y Siete',
'Seiscientos Sesenta Y Ocho',
'Seiscientos Sesenta Y Nueve',
'Seiscientos Setenta',
'Seiscientos Setenta Y Uno',
'Seiscientos Setenta Y Dos',
'Seiscientos Setenta Y Tres',
'Seiscientos Setenta Y Cuatro',
'Seiscientos Setenta Y Cinco',
'Seiscientos Setenta Y Seis',
'Seiscientos Setenta Y Siete',
'Seiscientos Setenta Y Ocho',
'Seiscientos Setenta Y Nueve',
'Seiscientos Ochenta',
'Seiscientos Ochenta Y Uno',
'Seiscientos Ochenta Y Dos',
'Seiscientos Ochenta Y Tres',
'Seiscientos Ochenta Y Cuatro',
'Seiscientos Ochenta Y Cinco',
'Seiscientos Ochenta Y Seis',
'Seiscientos Ochenta Y Siete',
'Seiscientos Ochenta Y Ocho',
'Seiscientos Ochenta Y Nueve',
'Seiscientos Noventa',
'Seiscientos Noventa Y Uno',
'Seiscientos Noventa Y Dos',
'Seiscientos Noventa Y Tres',
'Seiscientos Noventa Y Cuatro',
'Seiscientos Noventa Y Cinco',
'Seiscientos Noventa Y Seis',
'Seiscientos Noventa Y Siete',
'Seiscientos Noventa Y Ocho',
'Seiscientos Noventa Y Nueve',
'Setecientos',
'Setecientos Uno',
'Setecientos Dos',
'Setecientos Tres',
'Setecientos Cuatro',
'Setecientos Cinco',
'Setecientos Seis',
'Setecientos Siete',
'Setecientos Ocho',
'Setecientos Nueve',
'Setecientos Diez',
'Setecientos Once',
'Setecientos Doce',
'Setecientos Trece',
'Setecientos Catorce',
'Setecientos Quince',
'Setecientos Dieciséis',
'Setecientos Diecisiete',
'Setecientos Dieciocho',
'Setecientos Diecinueve',
'Setecientos Veinte',
'Setecientos Veintiuno',
'Setecientos Veintidós',
'Setecientos Veintitrés',
'Setecientos Veinticuatro',
'Setecientos Veinticinco',
'Setecientos Veintiséis',
'Setecientos Veintisiete',
'Setecientos Veintiocho',
'Setecientos Veintinueve',
'Setecientos Treinta',
'Setecientos Treinta Y Uno',
'Setecientos Treinta Y Dos',
'Setecientos Treinta Y Tres',
'Setecientos Treinta Y Cuatro',
'Setecientos Treinta Y Cinco',
'Setecientos Treinta Y Seis',
'Setecientos Treinta Y Siete',
'Setecientos Treinta Y Ocho',
'Setecientos Treinta Y Nueve',
'Setecientos Cuarenta',
'Setecientos Cuarenta Y Uno',
'Setecientos Cuarenta Y Dos',
'Setecientos Cuarenta Y Tres',
'Setecientos Cuarenta Y Cuatro',
'Setecientos Cuarenta Y Cinco',
'Setecientos Cuarenta Y Seis',
'Setecientos Cuarenta Y Siete',
'Setecientos Cuarenta Y Ocho',
'Setecientos Cuarenta Y Nueve',
'Setecientos Cincuenta',
'Setecientos Cincuenta Y Uno',
'Setecientos Cincuenta Y Dos',
'Setecientos Cincuenta Y Tres',
'Setecientos Cincuenta Y Cuatro',
'Setecientos Cincuenta Y Cinco',
'Setecientos Cincuenta Y Seis',
'Setecientos Cincuenta Y Siete',
'Setecientos Cincuenta Y Ocho',
'Setecientos Cincuenta Y Nueve',
'Setecientos Sesenta',
'Setecientos Sesenta Y Uno',
'Setecientos Sesenta Y Dos',
'Setecientos Sesenta Y Tres',
'Setecientos Sesenta Y Cuatro',
'Setecientos Sesenta Y Cinco',
'Setecientos Sesenta Y Seis',
'Setecientos Sesenta Y Siete',
'Setecientos Sesenta Y Ocho',
'Setecientos Sesenta Y Nueve',
'Setecientos Setenta',
'Setecientos Setenta Y Uno',
'Setecientos Setenta Y Dos',
'Setecientos Setenta Y Tres',
'Setecientos Setenta Y Cuatro',
'Setecientos Setenta Y Cinco',
'Setecientos Setenta Y Seis',
'Setecientos Setenta Y Siete',
'Setecientos Setenta Y Ocho',
'Setecientos Setenta Y Nueve',
'Setecientos Ochenta',
'Setecientos Ochenta Y Uno',
'Setecientos Ochenta Y Dos',
'Setecientos Ochenta Y Tres',
'Setecientos Ochenta Y Cuatro',
'Setecientos Ochenta Y Cinco',
'Setecientos Ochenta Y Seis',
'Setecientos Ochenta Y Siete',
'Setecientos Ochenta Y Ocho',
'Setecientos Ochenta Y Nueve',
'Setecientos Noventa',
'Setecientos Noventa Y Uno',
'Setecientos Noventa Y Dos',
'Setecientos Noventa Y Tres',
'Setecientos Noventa Y Cuatro',
'Setecientos Noventa Y Cinco',
'Setecientos Noventa Y Seis',
'Setecientos Noventa Y Siete',
'Setecientos Noventa Y Ocho',
'Setecientos Noventa Y Nueve',
'Ochocientos',
'Ochocientos Uno',
'Ochocientos Dos',
'Ochocientos Tres',
'Ochocientos Cuatro',
'Ochocientos Cinco',
'Ochocientos Seis',
'Ochocientos Siete',
'Ochocientos Ocho',
'Ochocientos Nueve',
'Ochocientos Diez',
'Ochocientos Once',
'Ochocientos Doce',
'Ochocientos Trece',
'Ochocientos Catorce',
'Ochocientos Quince',
'Ochocientos Dieciséis',
'Ochocientos Diecisiete',
'Ochocientos Dieciocho',
'Ochocientos Diecinueve',
'Ochocientos Veinte',
'Ochocientos Veintiuno',
'Ochocientos Veintidós',
'Ochocientos Veintitrés',
'Ochocientos Veinticuatro',
'Ochocientos Veinticinco',
'Ochocientos Veintiséis',
'Ochocientos Veintisiete',
'Ochocientos Veintiocho',
'Ochocientos Veintinueve',
'Ochocientos Treinta',
'Ochocientos Treinta Y Uno',
'Ochocientos Treinta Y Dos',
'Ochocientos Treinta Y Tres',
'Ochocientos Treinta Y Cuatro',
'Ochocientos Treinta Y Cinco',
'Ochocientos Treinta Y Seis',
'Ochocientos Treinta Y Siete',
'Ochocientos Treinta Y Ocho',
'Ochocientos Treinta Y Nueve',
'Ochocientos Cuarenta',
'Ochocientos Cuarenta Y Uno',
'Ochocientos Cuarenta Y Dos',
'Ochocientos Cuarenta Y Tres',
'Ochocientos Cuarenta Y Cuatro',
'Ochocientos Cuarenta Y Cinco',
'Ochocientos Cuarenta Y Seis',
'Ochocientos Cuarenta Y Siete',
'Ochocientos Cuarenta Y Ocho',
'Ochocientos Cuarenta Y Nueve',
'Ochocientos Cincuenta',
'Ochocientos Cincuenta Y Uno',
'Ochocientos Cincuenta Y Dos',
'Ochocientos Cincuenta Y Tres',
'Ochocientos Cincuenta Y Cuatro',
'Ochocientos Cincuenta Y Cinco',
'Ochocientos Cincuenta Y Seis',
'Ochocientos Cincuenta Y Siete',
'Ochocientos Cincuenta Y Ocho',
'Ochocientos Cincuenta Y Nueve',
'Ochocientos Sesenta',
'Ochocientos Sesenta Y Uno',
'Ochocientos Sesenta Y Dos',
'Ochocientos Sesenta Y Tres',
'Ochocientos Sesenta Y Cuatro',
'Ochocientos Sesenta Y Cinco',
'Ochocientos Sesenta Y Seis',
'Ochocientos Sesenta Y Siete',
'Ochocientos Sesenta Y Ocho',
'Ochocientos Sesenta Y Nueve',
'Ochocientos Setenta',
'Ochocientos Setenta Y Uno',
'Ochocientos Setenta Y Dos',
'Ochocientos Setenta Y Tres',
'Ochocientos Setenta Y Cuatro',
'Ochocientos Setenta Y Cinco',
'Ochocientos Setenta Y Seis',
'Ochocientos Setenta Y Siete',
'Ochocientos Setenta Y Ocho',
'Ochocientos Setenta Y Nueve',
'Ochocientos Ochenta',
'Ochocientos Ochenta Y Uno',
'Ochocientos Ochenta Y Dos',
'Ochocientos Ochenta Y Tres',
'Ochocientos Ochenta Y Cuatro',
'Ochocientos Ochenta Y Cinco',
'Ochocientos Ochenta Y Seis',
'Ochocientos Ochenta Y Siete',
'Ochocientos Ochenta Y Ocho',
'Ochocientos Ochenta Y Nueve',
'Ochocientos Noventa',
'Ochocientos Noventa Y Uno',
'Ochocientos Noventa Y Dos',
'Ochocientos Noventa Y Tres',
'Ochocientos Noventa Y Cuatro',
'Ochocientos Noventa Y Cinco',
'Ochocientos Noventa Y Seis',
'Ochocientos Noventa Y Siete',
'Ochocientos Noventa Y Ocho',
'Ochocientos Noventa Y Nueve',
'Novecientos',
'Novecientos Uno',
'Novecientos Dos',
'Novecientos Tres',
'Novecientos Cuatro',
'Novecientos Cinco',
'Novecientos Seis',
'Novecientos Siete',
'Novecientos Ocho',
'Novecientos Nueve',
'Novecientos Diez',
'Novecientos Once',
'Novecientos Doce',
'Novecientos Trece',
'Novecientos Catorce',
'Novecientos Quince',
'Novecientos Dieciséis',
'Novecientos Diecisiete',
'Novecientos Dieciocho',
'Novecientos Diecinueve',
'Novecientos Veinte',
'Novecientos Veintiuno',
'Novecientos Veintidós',
'Novecientos Veintitrés',
'Novecientos Veinticuatro',
'Novecientos Veinticinco',
'Novecientos Veintiséis',
'Novecientos Veintisiete',
'Novecientos Veintiocho',
'Novecientos Veintinueve',
'Novecientos Treinta',
'Novecientos Treinta Y Uno',
'Novecientos Treinta Y Dos',
'Novecientos Treinta Y Tres',
'Novecientos Treinta Y Cuatro',
'Novecientos Treinta Y Cinco',
'Novecientos Treinta Y Seis',
'Novecientos Treinta Y Siete',
'Novecientos Treinta Y Ocho',
'Novecientos Treinta Y Nueve',
'Novecientos Cuarenta',
'Novecientos Cuarenta Y Uno',
'Novecientos Cuarenta Y Dos',
'Novecientos Cuarenta Y Tres',
'Novecientos Cuarenta Y Cuatro',
'Novecientos Cuarenta Y Cinco',
'Novecientos Cuarenta Y Seis',
'Novecientos Cuarenta Y Siete',
'Novecientos Cuarenta Y Ocho',
'Novecientos Cuarenta Y Nueve',
'Novecientos Cincuenta',
'Novecientos Cincuenta Y Uno',
'Novecientos Cincuenta Y Dos',
'Novecientos Cincuenta Y Tres',
'Novecientos Cincuenta Y Cuatro',
'Novecientos Cincuenta Y Cinco',
'Novecientos Cincuenta Y Seis',
'Novecientos Cincuenta Y Siete',
'Novecientos Cincuenta Y Ocho',
'Novecientos Cincuenta Y Nueve',
'Novecientos Sesenta',
'Novecientos Sesenta Y Uno',
'Novecientos Sesenta Y Dos',
'Novecientos Sesenta Y Tres',
'Novecientos Sesenta Y Cuatro',
'Novecientos Sesenta Y Cinco',
'Novecientos Sesenta Y Seis',
'Novecientos Sesenta Y Siete',
'Novecientos Sesenta Y Ocho',
'Novecientos Sesenta Y Nueve',
'Novecientos Setenta',
'Novecientos Setenta Y Uno',
'Novecientos Setenta Y Dos',
'Novecientos Setenta Y Tres',
'Novecientos Setenta Y Cuatro',
'Novecientos Setenta Y Cinco',
'Novecientos Setenta Y Seis',
'Novecientos Setenta Y Siete',
'Novecientos Setenta Y Ocho',
'Novecientos Setenta Y Nueve',
'Novecientos Ochenta',
'Novecientos Ochenta Y Uno',
'Novecientos Ochenta Y Dos',
'Novecientos Ochenta Y Tres',
'Novecientos Ochenta Y Cuatro',
'Novecientos Ochenta Y Cinco',
'Novecientos Ochenta Y Seis',
'Novecientos Ochenta Y Siete',
'Novecientos Ochenta Y Ocho',
'Novecientos Ochenta Y Nueve',
'Novecientos Noventa',
'Novecientos Noventa Y Uno',
'Novecientos Noventa Y Dos',
'Novecientos Noventa Y Tres',
'Novecientos Noventa Y Cuatro',
'Novecientos Noventa Y Cinco',
'Novecientos Noventa Y Seis',
'Novecientos Noventa Y Siete',
'Novecientos Noventa Y Ocho',
'Novecientos Noventa Y Nueve'
];

$longitud = strlen($numero); //Longitud de valores
switch ($longitud) { 
    case $longitud==1: //Si el $numero tiene x longitud entonces hace la operacion
    //Substrae lo que esta a la izq del "mil" P.Ejm 13024;Res=13
    $resto = ltrim($numero, "0"); //Substrae lo que esta a la derecha del "mil" P.Ejm 13024;Res=24
        break;
    case $longitud==2:
    $resto = ltrim($numero, "0");
        break;
    case $longitud==3:
    $resto = ltrim($numero, "0");
        break;  
    case $longitud==4: //Si el $numero tiene x longitud entonces hace la operacion
    $miles = substr($numero, 0, -3);    //Substrae lo que esta a la izq del "mil" P.Ejm 13024;Res=13
    $resto = ltrim(substr($numero,1), "0"); //Substrae lo que esta a la derecha del "mil" P.Ejm 13024;Res=24
        break;
    case $longitud==5:
    $miles = substr($numero, 0, -3);
    $resto = ltrim(substr($numero,2), "0");
        break;
    case $longitud==6:
    $miles = substr($numero, 0, -3);
    $resto = ltrim(substr($numero,3), "0");
        break;       
    default:
        break;
}
if($numero>=2000 && $numero<1000000 ){ //Si el numero ingresado es mayor que mil y menor que un millon entonces imprime
    return strtolower($arreglo_numeros[$miles]." mil ".$arreglo_numeros[$resto]);
}
else if ($numero>=1000 && $numero <= 1999){  //Si el numero ingresado es igual que mil imprime
    return strtolower("mil ".$arreglo_numeros[$resto]);
}
else if($numero<1000 && $numero > 0){
    return strtolower($arreglo_numeros[$resto]); //Si el numero ingresado es menor que mil y mayor que 0 imprime
}
else if($numero==0){
    return "cero"; //Si el numero ingresado es 0 devuelvo cero
}
else {
    return "Ingrese un valor entre 999,999 y 0";
}
}
#--------------------------------------Eleccion de meses por arreglo---------------------------
function mes($numero)
{
    $valor = ['','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre',
        'octubre', 'noviembre', 'diciembre'];
    return $valor[$numero];
}
#--------------------------------------Calcular Edad por medio de una fecha---------------------------
function CalculaEdad($fecha)
{
$dateOfBirth = $fecha;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
return $diff->format('%y');
}

#--------------------------------------Hace mayuscula cada letra---------------------------
function ucsentence($str) {
    if ($str) { // input
      $str = preg_replace('/'.chr(32).chr(32).'+/', chr(32), $str); // recursively replaces all double spaces with a space
      if (($x = substr($str, 0, 10)) && ($x == strtoupper($x))) $str = strtolower($str); // sample of first 10 chars is ALLCAPS so convert $str to lowercase; if always done then any proper capitals would be lost
      $na = array('. ', '! ', '? '); // punctuation needles
      foreach ($na as $n) { // each punctuation needle
        if (strpos($str, $n) !== false) { // punctuation needle found
          $sa = explode($n, $str); // split
          foreach ($sa as $s) $ca[] = ucfirst($s); // capitalize
          $str = implode($n, $ca); // replace $str with rebuilt version
          unset($ca); //  clear for next loop
        }
      }
      return ucfirst(trim($str)); // capitalize first letter in case no punctuation needles found
    }
  }