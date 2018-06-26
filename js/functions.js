function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value;
    while(valor.indexOf('.') >(-1)){
        valor=valor.replace('.','');   
    }
    // Despejar Guión
    valor = valor.replace('-','');
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);

    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    var user = rut.value;
    var aux = "";
    for(i=0;i<user.length;i++){
        if((user[i]==0)||(user[i]==1)||(user[i]==2)||(user[i]==3)||(user[i]==4)||(user[i]==5)||(user[i]==6)||(user[i]==7)||(user[i]==8)||(user[i]==9)||(user[i]=='k')||(user[i]=='K')){
            if(user[i]=='k')
                aux=aux+'K';
            else
                aux=aux+user[i];
        }
    }
    if(aux=="")
        rut.value="";
    else{
        i=aux.length-2;
        while((aux[i]!='k')&&(aux[i]!='K')&&(i>=0)){
            i--;
        }
        if(i!=-1)
            rut.value="";
        else {
            var tmp = "";
            tmp='-'+aux[aux.length-1]+tmp;
            for(i=aux.length-2,j=0;i>=0;i--,j++){
                if((j%3==0)&&(j!=0)) tmp='.'+tmp;
                tmp=aux[i]+tmp;
            }
            rut.value=tmp;
        }
    }

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}


