#ifndef CIRCUNFERENCIA_H 
#define CIRCUNFERENCIA_H 1
class circunferencias
{
private:
	const static double PI = 3.1416;

private:
	double radio;

public:
	circunferencias(){
		this->radio = 0.0;
	}
	circunferencias(double){
		this->radio = radio;
	}

	double circunferencias::getRadio(){
		return this->radio;
	}
	void circunferencias::setRadio(double nuevo_rad){
		this->radio = nuevo_rad
	}
	
};
#endif