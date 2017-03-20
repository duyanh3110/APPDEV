// header file for screen manipulations
#define UNICODE

#define BAR "\u2590"
enum COLORS{BLACK=30, RED, GREEN, YELLOW, BLUE, MAGENTA, CYAN, WHITE};

// function propotypes
void clearScreen(void);
void setFGcolor(int fg);
void resetColors(void);
void gotoXY(int row, int col);
void displayBar(int col, double rms);
